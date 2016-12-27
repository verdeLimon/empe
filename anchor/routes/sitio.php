<?php

Route::get('/', function () {
    return Response::redirect('index');
});
Route::get('index', function() {
//    $vars['data'] = Encuestado::find(11306);
//    $vars['se'] = Situacionempresa::all(array('select' => 'formalizacion , COUNT(*) as total', 'group' => 'formalizacion'));
//    $vars['se2'] = Situacionempresa::find(11306);
    return new Template('index');
});
Route::get('(:any)/(:any)', function ( $categoria, $slug) {
    if (!$pagina = Pagina::slug($slug)) {
        return Response::create(new Template('404'), 404);
    }

    $vars['pagina'] = $pagina;
    return new Template('pagina', $vars);
});
