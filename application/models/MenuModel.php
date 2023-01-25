<?php
class MenuModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listMenuById($idCategorie)
    {
        $query = $this->db->query("SELECT * FROM MENU WHERE IDCATEGORIE = ".$idCategorie);
        return $query->result();
    }

    public function listCategorie(){
        $query = $this->db->query("SELECT * FROM CATEGORIE");
        return $query->result();
    }

}
