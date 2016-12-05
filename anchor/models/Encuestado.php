<?php

class Encuestado extends ActiveRecord\Model {
    # explicit table name since our table is not "books"

    static $table_name = 'encuestados';
    static $belongs_to = array(
        array('ubicacion', 'foreign_key' => 'idubicacion')
    );

//    public function sexoPorDistrito() {
//        $p = $this->find_by_sql("SELECT 'masculino' AS sexo,COUNT(*) `total` FROM encuestados
//            LEFT JOIN encargados enc ON(encuestados.idencuestado = enc.idencuestado )
//            WHERE enc.sexo='M' AND enc.cargo = 'Propietario' AND encuestados.idubicacion = {$this->idubicacion}
//            UNION
//            SELECT 'femenino' AS sexo,COUNT(*) `total` FROM encuestados
//            LEFT JOIN encargados enc ON(encuestados.idencuestado = enc.idencuestado )
//            WHERE enc.sexo='F' AND enc.cargo = 'Propietario' AND encuestados.idubicacion = {$this->idubicacion}");
//        return $p;
//    }
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
