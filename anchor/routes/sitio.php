<?php

Route::get('/', function () {
    return new Template('index');
    //return Response::redirect('index');
});
Route::get('index.html', function() {
//    $todos = Ubicacion::all(array('group' => 'provincia', 'order' => 'idprovincia'));
//    // print_r($todos);
//    foreach ($todos as $_p) {
//        $attributes = array('provincia' => $_p->provincia, 'idprovincia' => $_p->idprovincia);
//        $post = CapVIII::create($attributes);
//        echo $post->id . " - " . $_p->provincia . "<br>";
//    }
//    $vars['data'] = Encuestado::find(11306);
//    $vars['se'] = Situacionempresa::all(array('select' => 'formalizacion , COUNT(*) as total', 'group' => 'formalizacion'));
//    $vars['se2'] = Situacionempresa::find(11306);
    //return new Template('index');
});
Route::get('(:any)/(:any)', function ( $categoria, $slug) {
    if (!$pagina = Pagina::slug($slug)) {
        return Response::create(new Template('404'), 404);
    }
    $vars['pagina'] = $pagina;
    return new Template('pagina', $vars);
});
