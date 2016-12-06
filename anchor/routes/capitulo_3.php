<?php

//capitulo III Informacion complemetaria de la PYME
/**
 * Estado de formalizacion (SI, NO) de todo el departamento
 */
Route::get('propietario/formalizacion/departamento', function() {
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
/**
 * Estado de formalizacion (SI, NO) por provincia
 */
Route::get('propietario/formalizacion/provincia/(:num)', function($idprovincia) {
    $lugar = new Ubicacion();
    $lugarids = $lugar->idLugares($idprovincia);
    $select = "COUNT(case when semp.formalizacion='SI' then 1 end) as f_si, "
            . "count(case when semp.formalizacion='NO' then 1 end) as f_no, "
            . "count(*) as total_cnt";
    $joinss = "LEFT JOIN ubicacion ubic ON (encu.idubicacion = ubic.idubicacion) "
            . "LEFT JOIN situacionempresa semp ON (encu.idencuestado = semp.idencuestado)";
    $data = Encuestado::first(array(
                'select' => $select,
                'from' => 'encuestados encu',
                'joins' => $joinss,
                'conditions' => "ubic.idubicacion IN (" . implode(", ", $lugarids) . ")"
    ));
    $rretunr = array(
        array('formalizacion' => 'SI', 'total' => $data->f_si),
        array('formalizacion' => 'NO', 'total' => $data->f_no));
    return Json::encode($rretunr);
});
/**
 * Estado de formalizacion (SI, NO) por distrito
 * @param pk de la table ubicacion
 */
Route::get('propietario/formalizacion/distrito/(:num)', function($idubicacion) {
    $select = "COUNT(case when semp.formalizacion='SI' then 1 end) as f_si, "
            . "count(case when semp.formalizacion='NO' then 1 end) as f_no, "
            . "count(*) as total_cnt";
    $joinss = "LEFT JOIN ubicacion ubic ON (encu.idubicacion = ubic.idubicacion) "
            . "LEFT JOIN situacionempresa semp ON (encu.idencuestado = semp.idencuestado)";
    $data = Encuestado::first(array(
                'select' => $select,
                'from' => 'encuestados encu',
                'joins' => $joinss,
                'conditions' => 'ubic.idubicacion = ' . $idubicacion
    ));
    $rretunr = array(
        array('formalizacion' => 'SI', 'total' => $data->f_si),
        array('formalizacion' => 'NO', 'total' => $data->f_no));
    return Json::encode($rretunr);
});
