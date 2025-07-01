<?php
require_once("../../../conexion/conexion.php");
class clase_representantes
{   private $db;
    public $vl_codigo;
    public $vl_cedula;
    public $vl_apenom;
    public $vl_fecnac;
    public $vl_sexo;
    public $vl_estciv;
               

    public function __construct()
    {   $this->vl_codigo=0;
        $this->vl_cedula="";
        $this->vl_apenom="";
        $this->vl_fecnac="";
        $this->vl_sexo=0;
        $this->vl_estciv=0;

        $this->db = (new Conexion())->getConexion();
    }
                
    public function _insertar($vl_cedula,$vl_apenom, $vl_fecnac, $vl_sexo, $vl_estciv, $vl_domici)
    {
        $dmlsentencia="insert into snp_repr(REP_APENOM, REP_CEDULA, REP_FECNAC, REP_SEXO, REP_ESTCIV, REP_DOMICI) 
                                VALUES ( '" . $vl_apenom . "',
                                         '" . $vl_cedula . "',
                                         '" . $vl_fecnac . "',
                                          " . $vl_sexo . " ,
                                          " . $vl_estciv . " ,
                                         '" . $vl_domici . "'
                                         )";
        $insersion = $this->db->query($dmlsentencia);
        return $insersion;            
    }
                
    public function _consultartodo($valor)
    {
        if($valor=='')
        {
                $dmlsentencia="select * from snp_repr";
        }
        else
        {
                $dmlsentencia="select * from snp_repr where REP_APENOM like '%".$valor."%' OR REP_CEDULA like '%".$valor."%'" ;
        }
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }
     public function _consultarcodigo($valor)
    {
        $dmlsentencia="select * from snp_repr where REP_CODIGO = " . $valor ;
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }
    public function _eliminar($valor)
    {
        $dmlsentencia="delete from snp_repr where REP_CODIGO = " . $valor ;
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }

    public function _actualizar($cedula, $apenom, $codigo)
    {
        $dmlsentencia="update snp_repr SET 
         REP_APENOM = '". $apenom . "', 
         REP_CEDULA = '". $cedula . "' 
         WHERE REP_CODIGO = " . $codigo ;
        $registros = $this->db->query($dmlsentencia);
        return $registros ;
    }

}
?>