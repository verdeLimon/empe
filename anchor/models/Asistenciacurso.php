<?php

class Asistenciacurso extends ActiveRecord\Model {

    static $table_name = 'asistenciacurso';
    static $primary_key = 'idasistenciacurso';
    static $belongs_to = array(
        array('curso', 'foreign_key' => 'idcurso')
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
