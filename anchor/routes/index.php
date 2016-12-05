<?php

Route::get('ubicacion', function() {
//$data = Productividad::find(11301);
//echo"hh";
//echo ($data->encuestado->ruc);
    $data2 = Ubicacion::all(array('group' => 'provincia', 'order' => 'idubicacion asc'));
    return Response::create(ActiveRecord\Utils::results_to_json($data2, array('methods' => 'distritos')), 200, array('content-type' => 'application/json'));
});

Route::get(array('(:all)', '/index'), function($uri) {
    $vars['data'] = Encuestado::find(11306);
    $vars['se'] = Situacionempresa::all(array('select' => 'formalizacion , COUNT(*) as total', 'group' => 'formalizacion'));
    $vars['se2'] = Situacionempresa::find(11306);
    return new Template('index', $vars);
});

Route::get('jsong', function() {
    $data = Situacionempresa::all(array('select' => 'formalizacion, COUNT(*) as total', 'group' => 'formalizacion', 'conditions' => "sis='NO'"));
    return ActiveRecord\Utils::results_to_json($data);
});
Route::get('lugardemo', function() {
//$p_id = (int) $_GET['p_id'];
    $join = "LEFT JOIN encuestados enc ON(situacionempresa.idencuestado = enc.idencuestado) "
            . "LEFT JOIN ubicacion ubi ON(enc.idubicacion = ubi.idubicacion ) ";
//. "LEFT JOIN moneda m ON(proyectos.moneda = m.id)";
    $p = Situacionempresa::all(array('select' => 'formalizacion, COUNT(*) as total', 'group' => 'formalizacion', 'joins' => $join));

    echo "<pre>";
    echo count($p);
    echo ActiveRecord\Utils::results_to_json($p);
    "</pre>";
});
