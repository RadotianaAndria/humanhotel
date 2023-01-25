<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
	
		// load base_url
		$this->load->helper('url');
		$this->load->model('CategorieChambreModel');
		$this->load->model('ChambreModel');
		$this->load->model('MenuModel');
		$this->load->model('ReservationModel');
	  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$chambre = $this->CategorieChambreModel->listChambre();
		$data['chambre'] = $chambre;
		$data['error'] = null;
		$this->load->view('index', $data);
	}		
	public function rooms(){
		$chambre = $this->CategorieChambreModel->listChambre();
		$data['chambre'] = $chambre;
		$this->load->view('rooms', $data);
	}

	public function details($idCategorie){
		$categorie = $this->CategorieChambreModel->listChambreById($idCategorie);
		$data['categorie'] = $categorie;
		$description = $categorie[0]->DESCRIPTION;
		$descriptions = explode(" - ", $description);
		$data['options'] = $descriptions;
		$this->load->view('details', $data);
	}
	public function restaurant(){
		$categories = $this->MenuModel->listCategorie();
		$data['categories'] = $categories;
		$this->load->view('restaurant', $data);
	}
	public function detailsMenu($idCategorie){
		$menu = $this->MenuModel->listMenuById($idCategorie);
		$data['menu'] = $menu;
		$this->load->view('detailsMenu', $data);
	}
	public function about(){
		$this->load->view('about');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function verifierDisponibilite(){
		$chambre = $this->CategorieChambreModel->listChambre();
		$data['chambre'] = $chambre;
		try {
			$date = date("Y-m-d");
			
            $entree = $this->input->get("entree");
			$entree = str_replace('/"', '-', $entree);  
			$entree = date("Y-m-d", strtotime($entree));   

            
			$sortie = $this->input->get("sortie");
			$sortie = str_replace('/"', '-', $sortie);  
			$sortie = date("Y-m-d", strtotime($sortie));  
			
			$chambre = $this->input->get('chambre');
			$listChambre = $this->ChambreModel->listChambreByCategorie($chambre);

			$adulte = $this->input->get('adulte');
			$enfant = $this->input->get('enfant');

			if($date > $entree){
				throw new Exception("La date d'entrée ne doit pas être avant la date d'aujourd'hui");
			}
			if($date > $sortie){
				throw new Exception("La date de sortie ne doit pas être avant la date d'aujourd'hui");
			}
			if($entree > $sortie){
				throw new Exception("La date de sortie ne doit pas être avant la date d'entrée");
			}
			if($adulte == 0 && $enfant == 0){
				throw new Exception("Veuillez vérifier le nombre d'adulte et/ou le nombre d'enfant pour la réservation");
			}
			$count = 0;
			for($i = 0; $i<count($listChambre); $i++){
				$reservationOne = $this->ReservationModel->checkAvailabilityOne($entree, $sortie, $chambre, $listChambre[$i]->NUMERO);
				//$reservationTwo = $this->ReservationModel->checkAvailabilityTwo($entree, $sortie, $chambre, $listChambre[$i]->NUMERO);
				// echo "\nITY NY NUMERO CHAMBRE: ".$listChambre[$i]->NUMERO;
				if(count($reservationOne) == 0){
					$dataInsert = array(
						'IDCATEGORIECHAMBRE' => $chambre,
						'EMAIL' => null,
						'CHAMBRE' => $listChambre[$i]->NUMERO,
						'CONTACT' => '0324844780',
						'ENTREE' => $entree,
						'SORTIE' => $sortie,
						'ADULTE' => $adulte,
						'ENFANT' => $enfant,
						'REMARQUE' => null,
						'ETAT' => 1
					);
					$this->ReservationModel->addReservation($dataInsert);
					$data['success'] = "Succès de la réservation, veuillez passer à la paiement";
					// $this->load->view('index', $data);
					$this->load->view('my_stripe');
					
					break;
				}
				else{
					throw new Exception("Tous les chambres dans cette catégorie sont réservées entre les dates que vous avez choisi");
				}
			}
        } catch (Exception $e) {
            $data['error'] = $e->getMessage();
            $this->load->view('index', $data);
        }
	}
}
