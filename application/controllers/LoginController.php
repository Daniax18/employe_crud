<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('human/Utilisateur');
    }

	public function index()
	{
		$this->load->view('login');
		
	}		

    // VERIFICATION LOGIN
	public function verifyLogin(){
      
		$nom = $this -> input -> post('user');
		$mdp = $this -> input -> post('mdp');

		$result = $this -> Utilisateur -> verifyLogin($nom, $mdp);
		if($result['etat'] == 1){
			$this->session->set_userdata('user_data', $result['data']);
			redirect('welcome/index');
		} else {
            redirect('loginController/login/1');
        }
	}

    // PAGE LOGIN
	public function login($etat){
		if($etat == 0){
			$this->load->view('login');
		} else {
            $data['etat'] = "Login ou mot de passe incorrect";
			$this->load->view('login', $data);
		}	
	}

    // DECONNEXION
    public function logout()
	{
		$this->session->unset_userdata('user_data');
		redirect('loginController/login/0');
	}
}
