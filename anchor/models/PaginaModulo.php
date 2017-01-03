<?php

class PaginaModulo extends ActiveRecord\Model {
    # explicit table name since our table is not "books"

    static $table_name = 'web_pagina_modulo';
    static $belongs_to = array(
        array('modulo', 'foreign_key' => 'modulo_id', 'class_name' => 'Modulo'),
        array('pagina', 'foreign_key' => 'pagina_id', 'class_name' => 'Pagina')
    );

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
