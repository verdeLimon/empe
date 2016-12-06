<?php

class Instruccion extends ActiveRecord\Model {
# explicit table name since our table is not "books"

    static $table_name = 'instruccion';
    static $primary_key = 'idinstruccion';
    static $has_many = array(
//encargados con cargo de propietarios
        array('encargados', 'foreign_key' => 'instruccion', 'conditions' => "cargo= 'Propietario'")
    );

    public function idLugares($idprovincia) {
        $lugarids = array();
        $lugares = Ubicacion::all(array('conditions' => 'idprovincia = ' . $idprovincia));

        foreach ($lugares as $lugar) {
            $lugarids[] = $lugar->idubicacion;
        }
        return $lugarids;
    }

    /**
     * @param type $idprovincia
     * listado de grados academicos por provincias
     */
    public function totalprovincia($idprovincia) {
        $lugarids = $this->idLugares($idprovincia);
        $sql = "SELECT count(*) as total FROM encuestados encu "
                . "left join encargados enca on (encu.idencuestado = enca.idencuestado) "
                . "right join instruccion inst on (enca.instruccion = inst.idinstruccion) "
                . "where enca.cargo = 'Propietario' and encu.idubicacion IN (" . implode(", ", $lugarids) . ") and inst.idinstruccion = {$this->idinstruccion}";

//echo $sql;
        $total = $this->find_by_sql($sql);
        return $total;
    }

    /**
     * @param type $idubicacion
     * listado de grados academicos por provincias
     */
    public function totaldistrito($idubicacion) {
        $sql = "SELECT count(*) as total FROM encuestados encu "
                . "left join encargados enca on (encu.idencuestado = enca.idencuestado) "
                . "right join instruccion inst on (enca.instruccion = inst.idinstruccion) "
                . "where enca.cargo = 'Propietario' and encu.idubicacion = {$idubicacion} and inst.idinstruccion = {$this->idinstruccion}";

//echo $sql;
        $total = $this->find_by_sql($sql);
        return $total;
    }

//    static $belongs_to = array(
//        array('contraparte', 'foreign_key' => 'contraparte')
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
}
