<?php

Route::collection(array('before' => 'auth,csrf'), function() {
    /**
     * index
     */
    Route::get('admin/categorias', function() {
        $pagination = Categoria::all(array(
                    'conditions' => "estado<>'papelera'"
        ));
        $vars['messages'] = Notify::read();
        $vars['categorias'] = $pagination;
        return View::create('categorias/index', $vars)
                        ->partial('header', 'categorias/header')
                        ->partial('menu', 'categorias/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * crear nueva pagina
     * GET
     */
    Route::get('admin/categorias/nuevo', function() {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();
        return View::create('categorias/nuevo', $vars)
                        ->partial('header', 'categorias/header')
                        ->partial('menu', 'categorias/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * crear nueva pagina
     * POST
     */
    Route::post('admin/categorias/nuevo', function() {
        $input = Input::get(array('titulo', 'descripcion', 'html', 'slug', 'estado', 'usuario_id'));
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
            return Response::redirect('admin/categorias/nuevo');
        }
        $pg = new Pagina();
        $pg->titulo = $input['titulo'];
        $pg->descripcion = $input['descripcion'];
        $pg->html = $_POST['html'];
        $pg->slug = $input['slug'];
        $pg->estado = $input['estado'];
        $pg->usuario_id = $input['usuario_id'];
        $pg->save();
        Input::clean();
        Notify::success(__('pages.created'));
        return Response::redirect('admin/categorias/');
    });
    /**
     * Editar pagina
     * GET
     */
    Route::get('admin/categorias/editar/(:num)', function($id) {
        $vars['messages'] = Notify::read();
        $vars['token'] = Csrf::token();
        $vars['_pg'] = Pagina::find($id);
        return View::create('categorias/editar', $vars)
                        ->partial('header', 'categorias/header')
                        ->partial('menu', 'categorias/menu')
                        ->partial('footer', 'partials/footer');
    });
    /**
     * Editar pagina
     * POST
     */
    Route::post('admin/categorias/editar/(:num)', function($id) {
        $input = Input::get(array('titulo', 'descripcion', 'html', 'slug', 'estado', 'usuario_id'));
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
            return Response::redirect('admin/categorias/editar/' . $id);
        }
        $pg = Pagina::find($id);
        $pg->titulo = $input['titulo'];
        $pg->descripcion = $input['descripcion'];
        $pg->html = $_POST['html'];
        $pg->slug = $input['slug'];
        $pg->estado = $input['estado'];
        $pg->usuario_id = $input['usuario_id'];
        $pg->save();
        Notify::success(__('pages.updated'));
        Input::clean();
        return Response::redirect('admin/categorias');
    });
    /**
     * Archivar pagina
     * GET
     */
    Route::get('admin/categorias/editar/(:any)/(:num)', function($op, $id) {
        try {
            $pg = Pagina::find($id);
            $pg->estado = $op;
            $pg->save();
            Notify::success('<b>' . ucfirst($op) . '</b> correctamente.');
        } catch (Exception $exc) {
            Notify::error('No se pudo completar la peticion.' . $exc->getMessage());
        }
        return Response::redirect('admin/categorias');
    });
    /**
     * Enviar pagina a la papelera
     * GET
     */
    Route::get('admin/categorias/papelera/enviar/(:num)', function( $id ) {
        try {
            $pg = Pagina::find($id);
            $pg->estado = 'papelera';
            $pg->save();
            Notify::success('<b>Enviado a la papelera</b> correctamente.');
        } catch (Exception $exc) {
            Notify::error('No se pudo completar la peticion.' . $exc->getMessage());
        }
        return Response::redirect('admin/categorias');
    });
    /**
     * papelera restaurar pagina
     */
    Route::get('admin/categorias/papelera/restaurar/(:num)', function( $id ) {
        try {
            $pg = Pagina::find($id);
            $pg->estado = 'publicado';
            $pg->save();
            Notify::success('<b>P&aacute;gina restaurada</b> correctamente.');
        } catch (Exception $exc) {
            Notify::error('No se pudo completar la peticion.' . $exc->getMessage());
        }
        return Response::redirect('admin/categorias/papelera');
    });

    /**
     * papelera index
     */
    Route::get('admin/categorias/papelera', function() {
        $pagination = Pagina::all(array(
                    'conditions' => "estado='papelera'"
        ));
        $vars['messages'] = Notify::read();
        $vars['categorias'] = $pagination;
        return View::create('categorias/papelera', $vars)
                        ->partial('header', 'categorias/header')
                        ->partial('menu', 'categorias/menu')
                        ->partial('footer', 'partials/footer');
    });

    /**
     * papelera index
     */
    Route::get('admin/categorias/media', function() {
        return View::create('categorias/media')
                        ->partial('header', 'categorias/header')
                        ->partial('menu', 'categorias/menu')
                        ->partial('footer', 'partials/footer');
    });



    /**
     *  Todas las categorias
     * @retunr json
     */
    Route::get('admin/api/categorias', function() {
        $pg = Pagina::all(array('conditions' => "estado = 'publicado'"));

        return ActiveRecord\Utils::results_to_json($pg, array(
                    'only' => array('id', 'titulo')
        ));
    });
});
