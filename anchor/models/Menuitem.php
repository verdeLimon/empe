<?php

class Menuitem extends ActiveRecord\Model {

    static $table_name = 'web_menuitem';
    static $belongs_to = array(
        array('menu', 'foreign_key' => 'menu_id'),
        array('parent_menuitem', 'foreign_key' => 'parent_menuitem_id', 'class_name' => 'Menuitem')
    );

//    static $has_many = array(
//        array('menuitems', 'foreign_key' => 'menu_id')
//    );
//   static $has_one = array(
//     array('marcologico','foreign_key'=>'proy_id')
//   );
//   function deleteOc() {
//        return Resultadooutcome::delete_all(array('conditions' => array('resultado_id' => $this->id)));
//         //Payments::delete_all(array('conditions' => array('user_id' => $this->id)));
//        //return parent::delete();
//     }
}
