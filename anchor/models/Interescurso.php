<?php

class Interescurso extends ActiveRecord\Model {

    static $table_name = 'interescurso';
    static $primary_key = 'idinterescurso';
    static $belongs_to = array(
        array('curso', 'foreign_key' => 'idcurso'),
        array('encargado', 'foreign_key' => 'idencargado')
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
