<?php

class Ubicacion extends ActiveRecord\Model {

    static $table_name = 'ubicacion';
    static $primary_key = 'idubicacion';

//    static $belongs_to = array(
//        array('encuestado', 'foreign_key' => 'idencuestado')
//    );
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
    /**
     *
     * @return Distritos de una provincia
     */
    public function distritos() {
        $provincias = $this->all(array('conditions' => array('idprovincia = ?', $this->idprovincia)));
        $distritos = array();
        foreach ($provincias as $pref) {
            $obj = new stdClass();
            $obj->idubicacion = $pref->idubicacion;
            $obj->distrito = $pref->distrito;
            $obj->idprovincia = $pref->idprovincia;
//$obj->idubicacion = $pref->idubicacion;
            $distrito[] = $obj;
        }
        return $distrito;
    }

    public function sexoPorprovincia($idprovincia) {
        $lugarids = array();
        $lugares = $this->all(array('conditions' => 'idprovincia = ' . $idprovincia));

        foreach ($lugares as $lugar) {
            $lugarids[] = $lugar->idubicacion;
        }
        $sql = "SELECT 'masculino' AS sexo,COUNT(*) `total` FROM encuestados "
                . "LEFT JOIN encargados enc ON(encuestados.idencuestado = enc.idencuestado) "
                . "WHERE enc.sexo = 'M' AND enc.cargo = 'Propietario' AND encuestados.idubicacion IN (" . implode(", ", $lugarids) . ") "
                . "UNION "
                . "SELECT 'femenino' AS sexo, COUNT(*) `total` FROM encuestados "
                . "LEFT JOIN encargados enc ON(encuestados.idencuestado = enc.idencuestado) "
                . "WHERE enc.sexo = 'F' AND enc.cargo = 'Propietario' AND encuestados.idubicacion IN (" . implode(", ", $lugarids) . ")";
        //echo $sql;
        $p = $this->find_by_sql($sql);
        return $p;
    }

    /**
     * @return sexo por distrito y toda la region
     *
     */
    public function sexoPorDistrito($todo = false) {

        $sql = "SELECT 'masculino' AS sexo, COUNT(*) `total` FROM encuestados "
                . "LEFT JOIN encargados enc ON(encuestados.idencuestado = enc.idencuestado) "
                . "WHERE enc.sexo = 'M' AND enc.cargo = 'Propietario'" . (!$todo ? " AND encuestados.idubicacion = {$this->idubicacion} " : " ")
                . "UNION "
                . "SELECT 'femenino' AS sexo, COUNT(*) `total` FROM encuestados "
                . "LEFT JOIN encargados enc ON(encuestados.idencuestado = enc.idencuestado) "
                . "WHERE enc.sexo = 'F' AND enc.cargo = 'Propietario'" . (!$todo ? " AND encuestados.idubicacion = {$this->idubicacion} " : " ");
        $p = $this->find_by_sql($sql);
        return $p;
    }

}
