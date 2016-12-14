<?php

Route::collection(array('before' => 'auth'), function() {
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
     * Archivar/publicar menu
     * GET
     */
    Route::get('admin/menu/editar/(:num)/(:num)', function($op, $id) {
        $pg = Menu::find($id);
        $pg->estado = $op;
        $pg->save();
        $result = $op ? 'Publicado' : 'Archivado';
        Notify::success('<b>' . $result . '</b> correctamente.');
        return Response::redirect('admin/menu');
    });
    /**
     * Menu Items
     * GET
     */
    Route::get('admin/menu/items/(:num)', function( $id) {
        $vars['messages'] = Notify::read();
        //$vars['menue'] = Menu::find($id);
        $vars['id'] = $id;

        return View::create('menu/items', $vars)
                        ->partial('header', 'menu/itemheader')
                        ->partial('menu', 'menu/menu')
                        ->partial('footer', 'partials/footer');
    });

    /**     * API 1.0 JSON   */
    /**
     * MenuItems
     * GET (json)
     */
    Route::get('admin/api/menu/items/(:num)', function( $id) {
//        echo $id;
        $menu = Menu::find($id);
        return $menu->to_json(array('include' => 'menuitems_o'));
    });
    /**
     * ordenar
     * GET json
     */
    Route::post('admin/api/menu/ordenar/(:num)', function( $id) {
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
    Route::post('admin/api/menu/guardar/(:num)', function($menu_id) {
        $json = Input::get(array('data'));
        $post = JSON::decode($json['data']);
        $item = ($post->id) ? Menuitem::find($post->id) : new Menuitem();
        $item->texto = $post->texto;
        $item->url = $post->url;
        $item->tipo = $post->tipo;
        $item->orden = ($post->id) ? $item->orden : Menuitem::count(array('conditions' => 'menu_id = ' . $menu_id)) + 1;
        $item->target = $post->target;
        $item->parent_id = $post->parent_id;
        $item->menu_id = $menu_id;
        $item->save();
        return json_encode(array(
            'code' => true,
            'num' => $item->id,
            'msg' => 'Item guardado correctamente'
        ));
    });
//    Route::post('admin/menu/update', function() {
//        $sort = Input::get('sort');
//
//        foreach ($sort as $index => $id) {
//            Page::where('id', '=', $id)->update(array('menu_order' => $index));
//        }
//
//        return Response::json(array('result' => true));
//    });
});
