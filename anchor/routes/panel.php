<?php

Route::collection(array('before' => 'auth,csrf'), function() {

    Route::get('admin/panel', function($page = 1) {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();

        return View::create('index/index', $vars)
                        ->partial('header', 'partials/header')
                        ->partial('menu', 'index/menu')
                        ->partial('javascript', 'index/javascript')
                        ->partial('footer', 'partials/footer');
    });
});
