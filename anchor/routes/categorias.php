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
        $input = Input::get(array('titulo', 'descripcion', 'estado'));
        $input['slug'] = slug($input['titulo']);
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
        $cat = new Categoria();
        $cat->titulo = $input['titulo'];
        $cat->descripcion = $input['descripcion'];
        $cat->slug = $input['slug'];
        $cat->estado = $input['estado'];
        $cat->save();
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
        $vars['_pg'] = Categoria::find($id);
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
        $input = Input::get(array('titulo', 'descripcion', 'estado'));
        $input['slug'] = slug($input['titulo']);

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
        $cat = Categoria::find($id);
        $cat->titulo = $input['titulo'];
        $cat->descripcion = $input['descripcion'];
        $cat->slug = $input['slug'];
        $cat->estado = $input['estado'];
        $cat->save();
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
            $cat = Categoria::find($id);
            $cat->estado = $op;
            $cat->save();
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
            $cat = Categoria::find($id);
            $cat->estado = 'papelera';
            $cat->save();
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
            $cat = Categoria::find($id);
            $cat->estado = 'publicado';
            $cat->save();
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
        $pagination = Categoria::all(array(
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
