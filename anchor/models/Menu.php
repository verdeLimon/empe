<?php

class Menu extends ActiveRecord\Model {
    # explicit table name since our table is not "books"

    static $table_name = 'web_menus';
    static $has_many = array(
        array('menuitems', 'class_name' => 'Menuitem', 'foreign_key' => 'menu_id'),
        array('menuitems_o', 'class_name' => 'Menuitem', 'foreign_key' => 'menu_id', 'order' => 'orden asc'),
        array('menuitems_m', 'class_name' => 'Menuitem', 'foreign_key' => 'menu_id', 'conditions' => 'estado = 1', 'order' => 'orden asc')
    );

    public function sorted_items() {
        $_fathers = array();
        //return $this->menuitems;
        foreach ($this->menuitems as $_i) {
            if ($_i->parent_menuitem_id == 0) {
                $_o = new stdClass();
                $_o->id = $_i->id;
                $_o->texto = $_i->texto;
                $_o->childrens = array();
                $_fathers[] = $_o;
            }
        }
        foreach ($_fathers as $key => $_f) {
            foreach ($this->menuitems as $_i) {
                if ($_f->id == $_i->parent_menuitem_id) {
                    $_o = new stdClass();
                    $_o->id = $_i->id;
                    $_o->texto = $_i->texto;
                    $_o->childrens = array();
                    $_f->childrens[] = $_o;
                }
            }
        }

        return $_fathers;
    }

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
