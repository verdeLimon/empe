<?php

//capitulo I

Route::get('jsong', function() {
    $select = "COUNT(case when semp.formalizacion='SI' then 1 end) as f_si, "
            . "count(case when semp.formalizacion='NO' then 1 end) as f_no, "
            . "count(*) as total_cnt";
    $data = Encuestado::first(array(
                'select' => $select,
                'from' => 'encuestados encu',
                'joins' => 'LEFT JOIN situacionempresa semp ON (encu.idencuestado = semp.idencuestado)'
    ));
    $rretunr = array(
        array('formalizacion' => 'SI', 'total' => $data->f_si),
        array('formalizacion' => 'NO', 'total' => $data->f_no));
    return Json::encode($rretunr);
});
//Route::get('lugardemo', function() {
////$p_id = (int) $_GET['p_id'];
//    $join = "LEFT JOIN encuestados enc ON(situacionempresa.idencuestado = enc.idencuestado) "
//            . "LEFT JOIN ubicacion ubi ON(enc.idubicacion = ubi.idubicacion ) ";
////. "LEFT JOIN moneda m ON(proyectos.moneda = m.id)";
//    $p = Situacionempresa::all(array('select' => 'formalizacion, COUNT(*) as total', 'group' => 'formalizacion', 'joins' => $join));
//
//    echo "<pre>";
//    echo count($p);
//    echo ActiveRecord\Utils::results_to_json($p);
//    "</pre>";
//});
