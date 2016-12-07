<?php

Route::get('ubicacion', function() {
//$data = Productividad::find(11301);
//echo"hh";
//echo ($data->encuestado->ruc);
    $data2 = Ubicacion::all(array('group' => 'provincia', 'order' => 'idubicacion asc'));
    return Response::create(ActiveRecord\Utils::results_to_json($data2, array('methods' => 'distritos')), 200, array('content-type' => 'application/json'));
});
