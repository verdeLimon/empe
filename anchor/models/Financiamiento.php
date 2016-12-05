<?php

class Financiamiento extends ActiveRecord\Model {

    static $table_name = 'financiamiento';
    static $primary_key = 'idfinanciamiento';
    static $belongs_to = array(
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
