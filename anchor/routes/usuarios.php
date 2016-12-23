<?php

Route::collection(array('before' => 'auth'), function() {
    /**
     * index
     */
    Route::get('admin/usuarios', function() {
        $vars['messages'] = Notify::read();
        $vars['usuarios'] = Usuario::all();
        return View::create('usuarios/index', $vars)
                        ->partial('header', 'usuarios/header')
                        ->partial('menu', 'usuarios/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * nuevo usuarios
     * GET
     */
    Route::get('admin/usuarios/nuevo', function() {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();

        return View::create('usuarios/nuevo', $vars)
                        ->partial('header', 'usuarios/header')
                        ->partial('menu', 'usuarios/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * crear nuevo usuarios
     * POST
     */
    Route::post('admin/usuarios/nuevo', function() {
        $input = Input::get(array('username', 'email', 'real_name', 'password', 'password2', 'bio'));
        $input['username'] = trim($input['username']);
        foreach ($input as $key => &$value) {
            if ($key === 'password')
                continue; // Can't avoid, so skip.
            $value = eq($value);
        }
        $validator = new Validator($input);
        $validator->add('duplicate', function($username) {
            return count(Usuario::all(array('conditions' => "username = '" . $username . "'"))) == 0;
        });
        $validator->check('username')
                ->is_max(3, __('users.username_missing', 2));
        $validator->check('email')
                ->is_email(__('users.email_missing'));
        $validator->check('password')
                ->is_max(6, __('users.password_too_short', 6))
                ->is_equal($input['password2'], __('users.password_equal')); //password_equal
        $validator->check('username')
                ->is_regex('/^[A-Za-z0-9_]+$/', __('users.username_slug'))//username_slug
                ->is_duplicate(__('users.username_exist'));

        if ($errors = $validator->errors()) {
            Input::flash();
            Notify::danger($errors);
            return Response::redirect('admin/usuarios/nuevo');
        }
        $usr = new Usuario();
        $usr->username = $input['username'];
        $usr->email = $input['email'];
        $usr->real_name = $input['real_name'];
        $usr->password = Hash::make($input['password']);
        $usr->bio = $input['bio'];
        $usr->status = 'active';
        $usr->role = 'administrator';
        $usr->save();
        Input::clean();
        Notify::success(__('users.created'));
        return Response::redirect('admin/usuarios');
    });
    /**
     * editar usuarios
     * GET
     */
    Route::get('admin/usuarios/editar/(:num)', function($id) {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();
        $vars['_us'] = Usuario::find($id);
        return View::create('usuarios/editar', $vars)
                        ->partial('header', 'usuarios/header')
                        ->partial('menu', 'usuarios/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * editar  usuarios
     * POST
     */
    Route::post('admin/usuarios/editar/(:num)', function( $id ) {
        $input = Input::get(array('username', 'email', 'real_name', 'password', 'password2', 'bio'));
        $input['username'] = trim($input['username']);
        foreach ($input as $key => &$value) {
            if ($key === 'password')
                continue; // Can't avoid, so skip.
            $value = eq($value);
        }
        $validator = new Validator($input);
        $validator->add('duplicate', function($username) {
            return count(Usuario::all(array('conditions' => "username = '" . $username . "'"))) == 0;
        });
        $validator->check('username')
                ->is_max(3, __('users.username_missing', 2));
        $validator->check('email')
                ->is_email(__('users.email_missing'));
//        if() {
//            $validator->check('password')
//                    ->is_max(6, __('users.password_too_short', 6))
//                    ->is_equal($input['password2'], __('users.password_equal')); //password_equal
//        }


        $validator->check('username')
                ->is_regex('/^[A-Za-z0-9_]+$/', __('users.username_slug'))//username_slug
                ->is_duplicate(__('users.username_exist'));

        if ($errors = $validator->errors()) {
            Input::flash();
            Notify::danger($errors);
            return Response::redirect('admin/usuarios/nuevo');
        }
        $usr = Usuario::find($id);
        $usr->username = $input['username'];
        $usr->email = $input['email'];
        $usr->real_name = $input['real_name'];
        $usr->password = Hash::make($input['password']);
        $usr->bio = $input['bio'];
//        $usr->status = 'active';
//        $usr->role = 'administrator';
        $usr->save();
        Input::clean();
        Notify::success(__('users.created'));
        return Response::redirect('admin/usuarios');
    });
    /**
     * Archivar/publicar usuarios
     * GET
     */
    Route::get('admin/usuarios/editar/(:num)/(:num)', function($op, $id) {
        $pg = Usuario::find($id);
        $pg->status = $op;
        $pg->save();
        $result = $op ? 'Publicado' : 'Archivado';
        Notify::success('<b>' . $result . '</b> correctamente.');
        return Response::redirect('admin/usuarios');
    });
});
