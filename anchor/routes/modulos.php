<?php

Route::collection(array('before' => 'auth,csrf,install_exists'), function() {


    Route::get('admin/modulos', function() {
        $pg = Pagina::find(23);
        echo "<pre>";
        var_dump($pg->modulos);
        echo "</pre>";
    });
});
