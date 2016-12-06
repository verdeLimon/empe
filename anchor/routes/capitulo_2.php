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
Route::get('propietario/sexo/provincia/(:num)', function( $idprovincia ) {
    $p = new Ubicacion();
    return ActiveRecord\Utils::results_to_json($p->sexoPorprovincia($idprovincia));
});
/**
 * @return sexo por distrito
 * idubicacion = distrito
 */
Route::get('propietario/sexo/distrito/(:num)', function( $idubicacion ) {
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

/**
 * @return 'grado de instruccion' de toda la region
 */
Route::get('propietario/instruccion/departamento', function() {

    $join = "left join encargados enca on (inst.idinstruccion=enca.instruccion) "
            . "left join encuestados encu on (encu.idencuestado = enca.idencuestado)";
    $inst = Instruccion::all(array(
                'select' => 'inst.*,count(enca.instruccion) as total',
                'from' => 'instruccion inst',
                'conditions' => "enca.cargo = 'Propietario' OR enca.idencargado is null",
                'group' => 'inst.idinstruccion',
                'joins' => $join)
    );
    return ActiveRecord\Utils::results_to_json($inst);
});
/**
 * @return 'grado de instruccion' de una provincia
 */
Route::get('propietario/instruccion/provincia/(:num)', function( $idprovincia) {
    $rreturn = array();
    $inst = Instruccion::all();
    foreach ($inst as $key => $ins) {
        $rreturn[$key]['id'] = $ins->idinstruccion;
        $rreturn[$key]['instruccion'] = $ins->descripcion;
        $rreturn[$key]['total'] = $ins->totalprovincia($idprovincia)[0]->total;
    }
    return Json::encode($rreturn);
    //return ActiveRecord\Utils::results_to_json($inst, array('methods' => array('totalprovincia' => 1)));
});
/**
 * @return 'grado de instruccion' de un distrito
 */
Route::get('propietario/instruccion/distrito/(:num)', function( $idubicacion) {
    $rreturn = array();
    $inst = Instruccion::all();
    foreach ($inst as $key => $ins) {
        $rreturn[$key]['id'] = $ins->idinstruccion;
        $rreturn[$key]['instruccion'] = $ins->descripcion;
        $rreturn[$key]['total'] = $ins->totaldistrito($idubicacion)[0]->total;
    }
    return Json::encode($rreturn);
});
