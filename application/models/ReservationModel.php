<?php
class ReservationModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkAvailabilityOne($entree, $sortie, $idChambre, $numero)
    {
        // $req = "SELECT RESERVATION.* FROM RESERVATION JOIN CATEGORIECHAMBRE ON CATEGORIECHAMBRE.IDCATEGORIECHAMBRE = RESERVATION.IDCATEGORIECHAMBRE WHERE ETAT = 1 AND RESERVATION.IDCATEGORIECHAMBRE=".$idChambre." AND RESERVATION.CHAMBRE = ".$numero." AND RESERVATION.ENTREE BETWEEN '".$entree."' AND '".$sortie."'";
        $req = "SELECT RESERVATION.* FROM RESERVATION JOIN CATEGORIECHAMBRE ON CATEGORIECHAMBRE.IDCATEGORIECHAMBRE = RESERVATION.IDCATEGORIECHAMBRE WHERE ETAT = 1 AND RESERVATION.IDCATEGORIECHAMBRE=1 AND RESERVATION.CHAMBRE = ".$numero." AND (('".$entree."' BETWEEN RESERVATION.ENTREE AND RESERVATION.SORTIE) OR ( '".$sortie."' BETWEEN RESERVATION.ENTREE AND RESERVATION.SORTIE) OR (RESERVATION.ENTREE BETWEEN '".$entree."' AND '".$sortie."') OR (RESERVATION.SORTIE BETWEEN '".$entree."' AND '".$sortie."'))";
        $query = $this->db->query($req);
        $result = $query->result();
        return $result;
    }

    // public function checkAvailabilityTwo($entree, $sortie, $idChambre, $numero)
    // {
    //     $req = "SELECT RESERVATION.* FROM RESERVATION JOIN CATEGORIECHAMBRE ON CATEGORIECHAMBRE.IDCATEGORIECHAMBRE = RESERVATION.IDCATEGORIECHAMBRE WHERE ETAT = 1 AND RESERVATION.IDCATEGORIECHAMBRE=".$idChambre." AND RESERVATION.CHAMBRE = ".$numero." AND RESERVATION.SORTIE BETWEEN '".$entree."' AND '".$sortie."'";
    //     echo "ITY NY REQUETE RESERVATION TWO: ".$req;
    //     $query = $this->db->query($req);
    //     $result = $query->result();
    //     var_dump($result);
    //     return $result;
    // }
    // public function addReservation($chambre, $email, $contact, $entree, $sortie, $adulte, $enfant, $remarque){

    // }
    public function addReservation($data){
        $this->db->insert('RESERVATION', $data);
    }

}



/***
 * RES 1: chambre 1 - 06-11-2021 - 15-11-2021
 * RES 2: chambre 1 - 25-11-2021 - 28-11-2021
 * RES 3: chambre 1 - 05-11-2021 - 11-11-2021
 */