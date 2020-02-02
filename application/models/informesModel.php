<?php

Class informesModel extends CI_Model {

    public function __construct() {
        parent::__construct(); // construct the Model class
    }

    /**
     * 
     */
    public function queryResumenClc($diaEfectivo, $diaHabil)
    {
        $this->load->dbutil();
        $query = $this->db->query("CALL new_procedure('.$diaEfectivo.','.$diaHabil.')"); 
        //echo $this->dbutil->csv_from_result($query);
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function queryVentasZonas()
    {
        $this->load->dbutil();
        $query = $this->db->query("CALL ventas_zonas()"); 
        //echo $this->dbutil->csv_from_result($query);
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }
    

}

?>