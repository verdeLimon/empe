<?php

class Situacionproblema extends ActiveRecord\Model {

    static $table_name = 'situacionproblema';
    static $primary_key = 'idsituacionproblema';
    static $belongs_to = array(
        array('problema', 'foreign_key' => 'idproblema'),
        array('encuestado', 'foreign_key' => 'idencuestado')
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
