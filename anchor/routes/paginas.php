<?php

Route::collection(array('before' => 'auth,csrf'), function() {
    /**
     * index
     */
    Route::get('admin/paginas', function() {
        $pagination = Pagina::all(array(
                    'conditions' => "estado<>'papelera'"
        ));
        $vars['messages'] = Notify::read();
        $vars['paginas'] = $pagination;
        return View::create('paginas/index', $vars)
                        ->partial('header', 'paginas/header')
                        ->partial('menu', 'paginas/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * crear nueva pagina
     * GET
     */
    Route::get('admin/paginas/nuevo', function() {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();

        $vars['categorias'] = Categoria::dropdown();
        return View::create('paginas/nuevo', $vars)
                        ->partial('header', 'paginas/header')
                        ->partial('menu', 'paginas/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * crear nueva pagina
     * POST
     */
    Route::post('admin/paginas/nuevo', function() {
        $input = Input::get(array('titulo', 'descripcion', 'html', 'slug', 'estado', 'usuario_id', 'categoria_id'));
        $input['slug'] = slug($input['titulo']);
        $input['usuario_id'] = Auth::user()->id;
        $validator = new Validator($input);
        $validator->add('duplicate', function($str) {
            return count(Pagina::all(array('conditions' => "slug = '" . $str . "'"))) == 0;
        });
        $validator->check('titulo')
                ->is_max(3, __('pages.title_missing'));
        $validator->check('descripcion')
                ->is_max(3, __('pages.description_missing'));
        $validator->check('slug')
                ->is_duplicate(__('pages.slug_duplicate'));
        if ($errors = $validator->errors()) {
            Input::flash();
            Notify::danger($errors);
            return Response::redirect('admin/paginas/nuevo');
        }
        $pg = new Pagina();
        $pg->titulo = $input['titulo'];
        $pg->descripcion = $input['descripcion'];
        $pg->html = $_POST['html'];
        $pg->slug = $input['slug'];
        $pg->estado = $input['estado'];
        $pg->usuario_id = $input['usuario_id'];
        $pg->categoria_id = $input['categoria_id'];
        $pg->save();
        Input::clean();
        Notify::success(__('pages.created'));
        return Response::redirect('admin/paginas/');
    });
    /**
     * Editar pagina
     * GET
     */
    Route::get('admin/paginas/editar/(:num)', function($id) {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();
        $vars['categorias'] = Categoria::dropdown();
        $vars['_pg'] = Pagina::find($id);
        return View::create('paginas/editar', $vars)
                        ->partial('header', 'paginas/header')
                        ->partial('menu', 'paginas/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * Editar pagina
     * POST
     */
    Route::post('admin/paginas/editar/(:num)', function($id) {
        $input = Input::get(array('titulo', 'descripcion', 'html', 'slug', 'estado', 'usuario_id', 'categoria_id'));
        $input['slug'] = slug($input['titulo']);
        $input['usuario_id'] = Auth::user()->id;
        $validator = new Validator($input);
//        $validator->add('duplicate', function($str) {
//            return count(Pagina::all(array('conditions' => "slug = '" . $str . "'"))) == 0;
//        });
        $validator->check('titulo')
                ->is_max(3, __('pages.title_missing'));
        $validator->check('descripcion')
                ->is_max(3, __('pages.description_missing'));
//        $validator->check('slug')
//                ->is_duplicate(__('pages.slug_duplicate'));
        if ($errors = $validator->errors()) {
            Input::flash();
            Notify::danger($errors);
            return Response::redirect('admin/paginas/editar/' . $id);
        }
        $pg = Pagina::find($id);
        $pg->titulo = $input['titulo'];
        $pg->descripcion = $input['descripcion'];
        $pg->html = $_POST['html'];
        $pg->slug = $input['slug'];
        $pg->estado = $input['estado'];
        $pg->usuario_id = $input['usuario_id'];
        $pg->categoria_id = $input['categoria_id'];
        $pg->save();
        Notify::success(__('pages.updated'));
        Input::clean();
        return Response::redirect('admin/paginas');
    });
    /**
     * Archivar pagina
     * GET
     */
    Route::get('admin/paginas/editar/(:any)/(:num)', function($op, $id) {
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
     * Enviar pagina a la papelera
     * GET
     */
    Route::get('admin/paginas/papelera/enviar/(:num)', function( $id ) {
        try {
            $pg = Pagina::find($id);
            $pg->estado = 'papelera';
            $pg->save();
            Notify::success('<b>Enviado a la papelera</b> correctamente.');
        } catch (Exception $exc) {
            Notify::error('No se pudo completar la peticion.' . $exc->getMessage());
        }
        return Response::redirect('admin/paginas');
    });
    /**
     * papelera restaurar pagina
     */
    Route::get('admin/paginas/papelera/restaurar/(:num)', function( $id ) {
        try {
            $pg = Pagina::find($id);
            $pg->estado = 'publicado';
            $pg->save();
            Notify::success('<b>P&aacute;gina restaurada</b> correctamente.');
        } catch (Exception $exc) {
            Notify::error('No se pudo completar la peticion.' . $exc->getMessage());
        }
        return Response::redirect('admin/paginas/papelera');
    });

    /**
     * papelera index
     */
    Route::get('admin/paginas/papelera', function() {
        $pagination = Pagina::all(array(
                    'conditions' => "estado='papelera'"
        ));
        $vars['messages'] = Notify::read();
        $vars['paginas'] = $pagination;
        return View::create('paginas/papelera', $vars)
                        ->partial('header', 'paginas/header')
                        ->partial('menu', 'paginas/menu')
                        ->partial('footer', 'partials/footer');
    });

    /**
     * papelera index
     */
    Route::get('admin/paginas/media', function() {
        return View::create('paginas/media')
                        ->partial('header', 'paginas/header')
                        ->partial('menu', 'paginas/menu')
                        ->partial('footer', 'partials/footer');
    });



    /**
     *  Todas las paginas
     * @retunr json
     */
    Route::get('admin/api/paginas', function() {
        $pg = Pagina::all(array('conditions' => "estado = 'publicado'"));

        return ActiveRecord\Utils::results_to_json($pg, array(
                    'only' => array('id', 'titulo')
        ));
    });
});
