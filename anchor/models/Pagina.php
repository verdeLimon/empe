<?php

class Pagina extends ActiveRecord\Model {
    # explicit table name since our table is not "books"

    static $table_name = 'web_paginas';
    static $belongs_to = array(
        array('autor', 'foreign_key' => 'usuario_id', 'class_name' => 'Usuario'),
        array('categoria', 'foreign_key' => 'categoria_id', 'class_name' => 'Categoria')
    );
    static $has_many = array(
        array('modulos', 'through' => 'paginamodulos'),
        array('paginamodulos', 'foreign_key' => 'pagina_id', 'class_name' => 'PaginaModulo')
    );

    public static function slug($slug) {
        return self::first(array('conditions' => "slug = '$slug'"));
    }

//   static $has_one = array(
//     array('marcologico','foreign_key'=>'proy_id')
//   );
//   static $has_many = array(
//        array('usuarios', 'foreign_key'=>'resultado')
//    );
//   function deleteOc() {
//        return Resultadooutcome::delete_all(array('conditions' => array('resultado_id' => $this->id)));
//         //Payments::delete_all(array('conditions' => array('user_id' => $this->id)));
//        //return parent::delete();
//     }
}
