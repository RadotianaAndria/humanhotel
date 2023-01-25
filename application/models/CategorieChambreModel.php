<?php
class CategorieChambreModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listChambre()
    {
        $query = $this->db->query("SELECT * FROM CATEGORIECHAMBRE");
        return $query->result();
    }

    public function listChambreById($id)
    {
        $query = $this->db->query("SELECT * FROM CATEGORIECHAMBRE WHERE IDCATEGORIECHAMBRE =".$id);
        return $query->result();
    }
}
