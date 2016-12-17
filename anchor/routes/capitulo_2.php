<?php

//capitulo II
/**
 * Datos del propietario
 * genero ,edad  y grado de instruccioN
 */
//Route::get(array('propietario', '(:num)'), function( $lugar = null ) {
//    echo isset($lugar) ? $lugar . "<br>" : 'null';
//    $p = Ubicacion::find(10);
//    echo "<pre>";
//    echo count($p->generoPorDistrito()) . "<br>";
//    echo ActiveRecord\Utils::results_to_json($p->generoPorDistrito(true));
//    "</pre>";
//});
/**
 * @return genero por provincia
 */
Route::get('genero/provincia/(:num)', function( $idprovincia ) {

});
/**
 * @return genero por distrito
 * idubicacion = distrito
 */
Route::get('genero/distrito/(:num)', function( $idubicacion ) {

});

/**
 * @return 'genero' de toda la region
 */
Route::get('genero/departamento', function() {
    return Template::create('capitulo_2/genero')
                    ->partial('header', 'header')
                    ->partial('footer', 'footer');
    //return new Template('capitulo_2/genero');
});

/**
 * @return 'grado de instruccion' de toda la region
 */
Route::get('instruccion/departamento', function() {

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
Route::get('instruccion/provincia/(:num)', function( $idprovincia) {
    $rreturn = array();
    $inst = Instruccion::all();
    $suma = 0;
    foreach ($inst as $key => $ins) {
        $rreturn[$key]['id'] = $ins->idinstruccion;
        $rreturn[$key]['instruccion'] = $ins->descripcion;
        $rreturn[$key]['total'] = $ins->totalprovincia($idprovincia)[0]->total;
        $suma += $ins->totalprovincia($idprovincia)[0]->total;
    }

    $total = 0;
    echo "<table border='0'>";
    echo "<tr>";
    echo "<td>Provincia</td><td>Instrucción</td><td>Cantidad</td><td>CPorcentaje</td>";
    echo "</tr>";
    foreach ($rreturn as $_d) {
        $total += $_d["total"];
        echo "<tr>";
        echo "<td></td><td>" . $_d["instruccion"] . "</td><td>" . $_d["total"] . "</td><td>" . ((int) $_d["total"] / $suma) . "</td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td></td><td>" . $total . "</td>";
    echo "</tr>";
    echo "</table>";

    //return ActiveRecord\Utils::results_to_json($inst, array('methods' => array('totalprovincia' => 1)));
});
/**
 * @return 'grado de instruccion' de un distrito
 */
Route::get('instruccion/distrito/(:num)', function( $idubicacion) {
    $rreturn = array();
    $inst = Instruccion::all();
    foreach ($inst as $key => $ins) {
        $rreturn[$key]['id'] = $ins->idinstruccion;
        $rreturn[$key]['instruccion'] = $ins->descripcion;
        $rreturn[$key]['total'] = $ins->totaldistrito($idubicacion)[0]->total;
    }
    return Json::encode($rreturn);
});
