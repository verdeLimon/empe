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

    public function idLugares($idprovincia) {
        $lugarids = array();
        $lugares = $this->all(array('conditions' => 'idprovincia = ' . $idprovincia));

        foreach ($lugares as $lugar) {
            $lugarids[] = $lugar->idubicacion;
        }
        return $lugarids;
    }

    public function sexoPorprovincia($idprovincia) {
        $lugarids = $this->idLugares($idprovincia);
        $sql = "SELECT 'masculino' AS sexo,COUNT(*) `total` FROM encuestados "
                . "LEFT JOIN encargados enc ON(encuestados.idencuestado = enc.idencuestado) "
                . "WHERE enc.sexo = 'M' AND enc.cargo = 'Propietario' AND encuestados.idubicacion IN (" . implode(", ", $lugarids) . ") "
                . "UNION "
                . "SELECT 'femenino' AS sexo, COUNT(*) `total` FROM encuestados "
                . "LEFT JOIN encargados enc ON(encuestados.idencuestado = enc.idencuestado) "
                . "WHERE enc.sexo = 'F' AND enc.cargo = 'Propietario' AND encuestados.idubicacion IN (" . implode(", ", $lugarids) . ")";
//echo $sql;
        $spp = $this->find_by_sql($sql);
        return $spp;
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
        $spd = $this->find_by_sql($sql);
        return $spd;
    }

//    public function grado2provincia($idprovincia) {
//
//        $lugarids = $this->idLugares($idprovincia);
//        $sql = "SELECT  ins.`descripcion`, enc.`instruccion`,COUNT(*) `total` FROM `encuestados` "
//                . "LEFT JOIN `encargados` enc ON(`encuestados`.idencuestado = enc.idencuestado) "
//                . "LEFT JOIN `instruccion` ins ON(enc.`instruccion` = ins.`idinstruccion`) "
//                . "WHERE enc.cargo = 'Propietario' AND `encuestados`.idubicacion IN (" . implode(", ", $lugarids) . ") "
//                . "group by enc.`instruccion`";
//        //echo $sql;
//        $spp = $this->find_by_sql($sql);
//        return $spp;
//    }
//    public function grado2departamento() {
//        // $rreturn = array();
//
//        $sql = "SELECT  ins.`idinstruccion`, ins.`descripcion`, enc.`instruccion`,COUNT(*) `total` FROM `encuestados` "
//                . "LEFT JOIN `encargados` enc ON(`encuestados`.idencuestado = enc.idencuestado) "
//                . "LEFT JOIN `instruccion` ins ON(enc.`instruccion` = ins.`idinstruccion`) "
//                . "WHERE enc.cargo = 'Propietario' "
//                . "group by enc.`instruccion`";
//        //echo $sql;
//        $gpd = $this->find_by_sql($sql);
//
//        $bd = Instruccion::all(array('select' => 'idinstruccion,descripcion,idinstruccion as instruccion,0 as total'));
//        $total = ActiveRecord\collect($bd, 'idinstruccion'); //total de la base de datos
//        $actual = ActiveRecord\collect($gpd, 'idinstruccion'); //en existencia
//        print_r($actual);
//        print_r($total);
//        $resultado = array_diff($total, $actual);
//
//        foreach ($bd as $val) {
//            if (!in_array($val->idinstruccion, $actual)) {
//                echo $val->idinstruccion . "NOO esta<br>";
//                $obj = new stdClass();
//                $obj->idinstruccion = $val->idinstruccion;
//                $obj->descripcion = $val->descripcion;
//                $obj->instruccion = $val->instruccion;
//                $obj->total = 0;
//                $gpd[] = $obj;
//            }
//        }
//        return $gpd;
//    }
}
