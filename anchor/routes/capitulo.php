<?php

//capitulo II
/**
 * Datos del propietario
 * sexo ,edad  y grado de instruccioN
 */
//Route::get(array('propietario', 'propietario/(:num)'), function( $lugar = null ) {
//    echo isset($lugar) ? $lugar . "<br>" : 'null';
//    $p = Ubicacion::find(10);
//    echo "<pre>";
//    echo count($p->sexoPorDistrito()) . "<br>";
//    echo ActiveRecord\Utils::results_to_json($p->sexoPorDistrito(true));
//    "</pre>";
//});
/**
 * @return sexo por provincia
 */
Route::get('propietario/sexo/provincia/(:num)', function( $idprovincia = null ) {
    $p = new Ubicacion();
    return ActiveRecord\Utils::results_to_json($p->sexoPorprovincia($idprovincia));
});
/**
 * @return sexo por distrito
 * idubicacion = distrito
 */
Route::get('propietario/sexo/distrito/(:num)', function( $idubicacion = null ) {
    $p = Ubicacion::find($idubicacion);
    return ActiveRecord\Utils::results_to_json($p->sexoPorDistrito());
});

/**
 * @return 'sexo' de toda la region
 */
Route::get('propietario/sexo/departamento', function() {
    $p = new Ubicacion();
    return ActiveRecord\Utils::results_to_json($p->sexoPorDistrito(true));
});
