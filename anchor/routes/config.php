<?php

Route::collection(array('before' => 'auth,csrf'), function() {

    Route::get('admin/config', function() {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();
        $vars['themes'] = Themes::all();
//        $vars['db'] = Config::db();
//        $vars['app'] = Config::db();

        return View::create('config/index', $vars)
                        ->partial('header', 'partials/header')
                        ->partial('menu', 'config/menu')
                        ->partial('javascript', 'index/javascript')
                        ->partial('footer', 'partials/footer');
    });
    /**
     *  'url' => '',
      'index' => '',
      'timezone' => 'America/Lima',
      'key' => 'W2IV8AgcXaqsFLp7FqYZOZVVSwAuy3oV',
      'language' => 'es_PE',
      'encoding' => 'UTF-8',
      'date_format' => 'jS M, Y',
      'theme' => 'gra_empe',
      'sitename' => 'Gobierno Regional de Ayacucho, Encuesta Mypes 2016',
      'description' => 'Ancuesta Mypes 2016 Gobierno Regional de Ayacucho'
     */
    Route::post('admin/config', function() {
        $input = Input::get(array('timezone', 'theme', 'sitename', 'description'));
        $cfg = Config::get("app");
        try {
            $cfg['theme'] = $input['theme'];
            $cfg['timezone'] = $input['timezone'];
            $cfg['sitename'] = $input['sitename'];
            $cfg['description'] = $input['description'];
            file_put_contents(APP . 'config/app.php', '<?php return ' . var_export($cfg, true) . ';');
            Input::clean();
        } catch (Exception $e) {
            file_put_contents(APP . 'config/app.php', '<?php return ' . var_export($cfg, true) . ';');
        }

        Notify::success(__('config.succes_saved'));
        return Response::redirect('admin/config');
    });
});
