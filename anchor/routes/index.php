<?php

Route::get(array('index'), function() {
    $vars['data'] = Encuestado::find(11306);
    $vars['se'] = Situacionempresa::all(array('select' => 'formalizacion , COUNT(*) as total', 'group' => 'formalizacion'));
    $vars['se2'] = Situacionempresa::find(11306);
    return new Template('index', $vars);
});


