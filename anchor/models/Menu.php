<?php

class Menu extends ActiveRecord\Model {
    # explicit table name since our table is not "books"

    static $table_name = 'web_menu';
    static $has_many = array(
        array('menuitems', 'class_name' => 'Menuitem', 'foreign_key' => 'menu_id'),
        array('menuitems_o', 'class_name' => 'Menuitem', 'foreign_key' => 'menu_id', 'order' => 'orden asc'),
        array('menuitems_m', 'class_name' => 'Menuitem', 'foreign_key' => 'menu_id', 'conditions' => 'estado = 1', 'order' => 'orden asc')
    );

//    static $belongs_to = array(
//        array('contraparte', 'foreign_key' => 'contraparte')
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
