<?php

/**
 * demo
 */
Route::get('demo/demo', function() {


//    $vars['messages'] = "Notify::read()";
//    $vars['token'] = "Csrf::token()";

    $vars['user'] = Usuario::find(1);

    return new Template('demo/posts', $vars);
//    return View::create('users/amnesia', $vars)
//                    ->partial('header', 'partials/header')
//                    ->partial('footer', 'partials/footer');
});

/**
 * View posts by category
 */
/**
 * Redirect by article ID
 */
/**
 * View article
 */
/**
 * Edit posts
 */
/**
 * Edit pages
 */
/**
 * Post a comment
 */
/**
 * Rss feed
 */
Route::get(array('rss', 'feeds/rss'), function() {
    $uri = 'http://' . $_SERVER['HTTP_HOST'];
    $rss = new Rss(Config::app('sitename'), Config::app('description'), $uri, Config::app('language'));

    $query = Post::where('status', '=', 'published')->sort(Base::table('posts.created'), 'desc')->take(25);

    foreach ($query->get() as $article) {
        $rss->item(
                $article->title, Uri::full(Registry::get('posts_page')->slug . '/' . $article->slug), $article->description, $article->created
        );
    }

    $xml = $rss->output();

    return Response::create($xml, 200, array('content-type' => 'application/xml'));
});

/**
 * Json feed
 */
Route::get('feeds/json', function() {
    $json = Json::encode(array(
                'meta' => Config::get('meta'),
                'posts' => Post::where('status', '=', 'published')->sort('created', 'desc')->take(25)->get()
    ));

    return Response::create($json, 200, array('content-type' => 'application/json'));
});

/**
 * Search
 */
Route::get(array('search', 'search/(:any)', 'search/(:any)/(:any)', 'search/(:any)/(:any)/(:num)'), function($whatSearching = 'all', $slug = '', $offset = 1) {
    // mock search page
    $page = new Page;
    $page->id = 0;
    $page->title = 'Search';
    $page->slug = 'search';

    // get search term
    $term = filter_var($slug, FILTER_SANITIZE_STRING);
    Session::put(slug($term), $term);
    //$term = Session::get($slug); //this was for POST only searches
    // revert double-dashes back to spaces
    $term = str_replace('--', ' ', $term);

    if ($offset <= 0) {
        return Response::create(new Template('404'), 404);
    }

    // Posts, pages, or all
    if ($whatSearching === 'posts')
        list($total, $results) = (Post::search($term, $offset, Post::perPage()));
    elseif ($whatSearching === 'pages')
        list($total, $results) = Page::search($term, $offset);
    else {
        $postResults = Post::search($term, $offset, Post::perPage());
        $pageResults = Page::search($term, $offset);
        $total = $postResults[0] + $pageResults[0];
        $results = array_merge($postResults[1], $pageResults[1]);
    }

    // search templating vars
    Registry::set('page', $page);
    Registry::set('page_offset', $offset);
    Registry::set('search_term', $term);
    Registry::set('search_results', new Items($results));
    Registry::set('total_posts', $total);

    return new Template('search');
});

Route::post('search', function() {
    // Search term
    $term = filter_var(Input::get('term', ''), FILTER_SANITIZE_STRING); // sanitize search term
    $term = str_replace(' ', '--', $term); // replace spaces with double-dash to pass through url
    // What searching
    $whatSearch = Input::get('whatSearch', ''); // get what we are searching for
    $whatSearch = $whatSearch === 'posts' ? 'posts' : $whatSearch === 'pages' ? 'pages' : 'all'; // clamp the choices

    Session::put(slug($term), $term);
    Session::put($whatSearch, $whatSearch);

    return Response::redirect('search/' . $whatSearch . '/' . slug($term));
});

/**
 * View pages
 */
