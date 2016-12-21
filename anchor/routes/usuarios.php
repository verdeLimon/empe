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
        $vars['usuariosed'] = Menu::find($id);
        return View::create('usuarios/editar', $vars)
                        ->partial('header', 'usuarios/header')
                        ->partial('usuarios', 'usuarios/usuarios')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * editar  usuarios
     * POST
     */
    Route::post('admin/usuarios/editar/(:num)', function( $id ) {
        $input = Input::get(array('nombre', 'descripcion', 'estado'));
        $validator = new Validator($input);

        $validator->check('nombre')
                ->is_empty(__('usuarios.title_missing'));
        $validator->check('descripcion')
                ->is_empty(__('usuarios.description_missing'));
        if ($errors = $validator->errors()) {
            Input::flash();
            Notify::danger($errors);
            return Response::redirect('admin/usuarios/editar/' . $id);
        }
        $pg = Menu::find($id);
        $pg->nombre = $input['nombre'];
        $pg->descripcion = $input['descripcion'];
        $pg->estado = $input['estado'];
        $pg->save();
        Input::clean();
        Notify::success(__('usuarios.updated'));
        return Response::redirect('admin/usuarios');
    });
    /**
     * Archivar/publicar usuarios
     * GET
     */
    Route::get('admin/usuarios/editar/(:num)/(:num)', function($op, $id) {
        $pg = Menu::find($id);
        $pg->estado = $op;
        $pg->save();
        $result = $op ? 'Publicado' : 'Archivado';
        Notify::success('<b>' . $result . '</b> correctamente.');
        return Response::redirect('admin/usuarios');
    });
    /**
     * Menu Items
     * GET
     */
    Route::get('admin/usuarios/items/(:num)', function( $id) {
        $vars['messages'] = Notify::read();
        //$vars['usuariose'] = Menu::find($id);
        $vars['id'] = $id;

        return View::create('usuarios/items', $vars)
                        ->partial('header', 'usuarios/itemheader')
                        ->partial('usuarios', 'usuarios/usuarios')
                        ->partial('footer', 'partials/footer');
    });

    /**     * API 1.0 JSON   */
    /**
     * MenuItems
     * GET (json)
     */
    Route::get('admin/api/usuarios/items/(:num)', function( $id) {
//        echo $id;
        $usuarios = Menu::find($id);
        return $usuarios->to_json(array('include' => 'usuariositems_o'));
    });
    /**
     * ordenar
     * GET json
     */
    Route::post('admin/api/usuarios/ordenar/(:num)', function($id) {
        $json = Input::get(array('data'));
        $menuitems = JSON::decode($json['data']);
        //var_dump($menuitems);
        $cont = 0;
        foreach ($menuitems as $key => $_i) {
            $_item = Menuitem::find($_i->id);
            //echo $_i->id . " 0rden = " . ($key + 1) . "<br>";
            ++$cont;
            $_item->update_attributes(array('orden' => ($key + 1)));
        }
        return json_encode(array(
            'code' => true,
            'num' => $cont,
            'msg' => 'Ordenado correctamente'
        ));
    });
    /**
     * ordenar
     * GET json
     */
    Route::post('admin/api/usuarios/guardar/(:num)', function($usuarios_id) {
        $json = Input::get(array('data'));
        $post = JSON::decode($json['data']);
        $item = ($post->id) ? Menuitem::find($post->id) : new Menuitem();
        $item->texto = $post->texto;
        $item->url = $post->url;
        $item->tipo = $post->tipo;
        $item->orden = ($post->id) ? $item->orden : Menuitem::count(array('conditions' => 'usuarios_id = ' . $usuarios_id)) + 1;
        $item->target = $post->target;
        $item->parent_id = $post->parent_id;
        $item->usuarios_id = $usuarios_id;
        $item->save();
        return json_encode(array(
            'code' => true,
            'num' => $item->id,
            'msg' => 'Item guardado correctamente'
        ));
    });
//    Route::post('admin/usuarios/update', function() {
//        $sort = Input::get('sort');
//
//        foreach ($sort as $index => $id) {
//            Page::where('id', '=', $id)->update(array('menu_order' => $index));
//        }
//
//        return Response::json(array('result' => true));
//    });
});
