<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    

    // PRENDRE LA LISTE DES EMPLOYES via VIEW
    public function getEmployes(){
        $this->db->select('*');
        $this->db->from('v_employe_detail');
        $query = $this->db->get();

        return $query->result_array();  // Prendre toutes les lignes
    }


    // PRENDRE LOGIN DATA
    public function verifyLogin($nom, $mdp){
        $this->db->select('*');
        $this->db->from('employe');
        $this->db->where('nom_employe', $nom);  
        $this->db->where('mdp', $mdp);
        $query = $this->db->get();
    
        $result = $query->row_array();  // retourne seulement une ligne

        if($result != null){
            return array(
                'etat' => 1,
                'data' => array(
                    'id_employe' => $result['id_employe'],
                    'nom_employe' => $result['nom_employe'],
                    'is_admin' => $result['is_admin']
                )
            );
        }else{
            return array(
                'etat' => 0,
                'data' => null
            );
        }
    }
}
