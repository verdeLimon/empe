<?php

Route::collection(array('before' => 'auth,install_exists'), function() {

    /**
     * index
     */
    Route::get('admin/menu', function() {
        $vars['messages'] = Notify::read();
        $vars['menusbd'] = Menu::all();
        return View::create('menu/index', $vars)
                        ->partial('header', 'menu/header')
                        ->partial('menu', 'menu/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * nuevo menu
     * GET
     */
    Route::get('admin/menu/nuevo', function() {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();

        return View::create('menu/nuevo', $vars)
                        ->partial('header', 'menu/header')
                        ->partial('menu', 'menu/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * crear nuevo menu
     * POST
     */
    Route::post('admin/menu/nuevo', function() {
        $input = Input::get(array('nombre', 'descripcion', 'estado'));
        $validator = new Validator($input);

        $validator->check('nombre')
                ->is_empty(__('menu.title_missing'));
        $validator->check('descripcion')
                ->is_empty(__('menu.description_missing'));
        if ($errors = $validator->errors()) {
            Input::flash();
            Notify::danger($errors);
            return Response::redirect('admin/menu/nuevo');
        }
        $pg = new Menu();
        $pg->nombre = $input['nombre'];
        $pg->descripcion = $input['descripcion'];
        $pg->estado = $input['estado'];
        $pg->save();
        Input::clean();
        Notify::success(__('menu.created'));
        return Response::redirect('admin/menu');
    });
    /**
     * editar menu
     * GET
     */
    Route::get('admin/menu/editar/(:num)', function($id) {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();
        $vars['menued'] = Menu::find($id);
        return View::create('menu/editar', $vars)
                        ->partial('header', 'menu/header')
                        ->partial('menu', 'menu/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * editar  menu
     * POST
     */
    Route::post('admin/menu/editar/(:num)', function( $id ) {
        $input = Input::get(array('nombre', 'descripcion', 'estado'));
        $validator = new Validator($input);

        $validator->check('nombre')
                ->is_empty(__('menu.title_missing'));
        $validator->check('descripcion')
                ->is_empty(__('menu.description_missing'));
        if ($errors = $validator->errors()) {
            Input::flash();
            Notify::danger($errors);
            return Response::redirect('admin/menu/editar/' . $id);
        }
        $pg = Menu::find($id);
        $pg->nombre = $input['nombre'];
        $pg->descripcion = $input['descripcion'];
        $pg->estado = $input['estado'];
        $pg->save();
        Input::clean();
        Notify::success(__('menu.updated'));
        return Response::redirect('admin/menu');
    });
    /**
     * Archivar pagina
     * GET
     */
    Route::get('admin/menu/editar/(:num)/(:num)', function($op, $id) {
        try {
            $pg = Pagina::find($id);
            $pg->estado = $op;
            $pg->save();
            Notify::success('<b>' . ucfirst($op) . '</b> correctamente.');
        } catch (Exception $exc) {
            Notify::error('No se pudo completar la peticion.' . $exc->getMessage());
        }
        return Response::redirect('admin/paginas');
    });
    /**
     *
     */
    Route::post('admin/menu/update', function() {
        $sort = Input::get('sort');

        foreach ($sort as $index => $id) {
            Page::where('id', '=', $id)->update(array('menu_order' => $index));
        }

        return Response::json(array('result' => true));
    });
});
