<?php

//Route::get(array('/'), function () {
//    return Response::redirect('reportes/indice/sol');
//});



Route::get(array('index'), function() {
    $vars['data'] = Encuestado::find(11306);
    $vars['se'] = Situacionempresa::all(array('select' => 'formalizacion , COUNT(*) as total', 'group' => 'formalizacion'));
    $vars['se2'] = Situacionempresa::find(11306);
    return new Template('index', $vars);
});
Route::get('index2', function() {
    $custom = Ubicacion::find_by_sql("SELECT enc.ruc,enc.razonsocial,enc.direccion  FROM encuestados enc "
                    . "left join ubicacion ubi on (enc.idubicacion = ubi.idubicacion) "
                    . "where ubi.idprovincia = 1");
    $columns = Ubicacion::table()->columns;
    echo "<pre>";
    print_r($columns);
    echo "</pre>";

//    $todos = Ubicacion::all(array('group' => 'provincia', 'order' => 'idprovincia'));
//    echo "<table border='1'>";
//    foreach ($todos as $_u) {
//
////        $custom = Ubicacion::find_by_sql("SELECT enc.ruc,enc.razonsocial,enc.direccion  FROM encuestados enc "
////                        . "left join ubicacion ubi on (enc.idubicacion = ubi.idubicacion) "
////                        . "where ubi.idprovincia = " . $_u->idprovincia);
////        $columns = Ubicacion::table()->columns;
////        echo "<pre>";
////        print_r($columns);
////        echo "</pre>";
////        echo "<br>";
////        echo "<br>";
////
////        echo "<tr>";
////        $empty = empty($_c->razonsocial) || empty($_c->direccion);
////        echo "<td colspan='3'><b>" . $_u->provincia . " (" . count($custom) . ")</b></td>";
////        echo "</tr>";
////        echo "<tr>";
////        echo "<td>RUC</td><td>NOMBRES</td><td>DIRECCION</td>";
////        echo "</tr>";
////        foreach ($custom as $_c) {
////            echo "<tr>";
////            echo "<td>";
////            echo $_c->ruc;
////            echo "</td>";
////            echo "<td>";
////            echo $_c->razonsocial;
////            echo "</td>";
////            echo "<td>";
////            echo $_c->direccion;
////            echo "</td>";
////            echo "</tr>";
////        }
//        //var_dump($custom);
//    }
//    echo "</table>";
//    echo "<br>";
//    echo "<br>";
    //$custom = Ubicacion::find_by_sql('select title from `books`');
});


