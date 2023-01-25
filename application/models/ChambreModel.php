<?php
class ChambreModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listChambreByCategorie($idCategorie)
    {
        $query = $this->db->query("SELECT CHAMBRE.NUMERO FROM CHAMBRE JOIN CATEGORIECHAMBRE ON CATEGORIECHAMBRE.IDCATEGORIECHAMBRE = CHAMBRE.IDCATEGORIECHAMBRE WHERE CHAMBRE.IDCATEGORIECHAMBRE = ".$idCategorie);
        return $query->result();
    }

}
