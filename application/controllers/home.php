<?php

class Home extends CI_controller {


	//Chargement de la page index
	public function index(){
		$this->load->view('home');
	}

	public function register(){
		$this->load->view('register');
	}

	//En cours : liste des utilisateurs
	public function user_list(){
		$this->load->view('user_list');
		$this->load->model('Add_user');
		$data['data'] = $this->Add_user->get();
		$this->load->view('table_data', $data);
	}


	//Ajout d'utilisateur
	public function add_user(){
		//On prend les infos depuis le register.php
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$adresse = $this->input->post('adresse');
		$mail = $this->input->post('mail');

		//On en fait un tableau pour l'envoyer
		$data = array('nom'=>$nom, 'prenom'=>$prenom, 'adresse'=>$adresse, 'mail'=>$mail);

		//On envoie le tableau au model pour l'insérer dans la bdd
		$this->load->model('Add_user');
		if ($this->Add_user->add($data)) {
			echo "Données enregistrées";
		}
		else {
			echo "Données non enregistrées";
		}
	}

}

?>