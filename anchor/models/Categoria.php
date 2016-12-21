<?php

class Categoria extends ActiveRecord\Model {
    # explicit table name since our table is not "books"

    static $table_name = 'web_categorias';

//    static $belongs_to = array(
//        array('autor', 'foreign_key' => 'usuario_id', 'class_name' => 'Usuario')
//    );

    public static function dropdown() {
        $items = array();
        $all = self::all();
        foreach ($all as $item) {
            $items[$item->id] = $item->titulo;
        }
        return $items;
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
