<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {
    
    public function __construct()
    {
        
        parent::__construct();
    }
    
    public function home(){
        
        $this->cabecalho->head();
        $this->load->view('index',$this->usuario->redictUser());
        $this->load->view('footer');
    }
    
    public function contato(){
        $this->cabecalho->head();
        $this->load->view('contato');
        $this->load->view('footer');
    }
    
    public function sobre(){
        $this->cabecalho->head();
        $this->load->view('sobre');
        $this->load->view('footer');
    }
    
    public function login()
    {
        $this->cabecalho->head();
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    public function creditos()
    {
        $this->cabecalho->head();
        $this->load->view('creditos');
        $this->load->view('footer');
    }
   
    public function erroAcess(){
        $this->cabecalho->head();
        $this->load->view('erroAcesso');
        $this->load->view('footer');
    }
    
     
    
    public function validaLogin(){
    	$email = $_POST["email1"];
        $senha = $_POST["senha1"];
        $this->load->model("model");
        $usr = $this->model->getUser($email,$senha);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("_ID", "admin");
                redirect("painel-admin"); 
            }else{
             	$this->session->set_userdata("_ID", "usuario"); 
             	$this->session->set_userdata("_EMAIL", $email);
             	
             	
             	redirect("painel-user"); 
        	}
        }else{
            redirect("login");
        }
        
    }
        
    public function logoutuser(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_EMAIL");
        redirect("home");
    }
    
    public function logoutadmin(){
        $this->session->unset_userdata("_ID");
        redirect("home");
    }
    
   

    //Função que insere no banco de dados 
    public function InsCont(){
		
		require_once APPPATH."models/contato.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert(new Contato($_POST['nome'],$_POST['email'],$_POST['assunto'],$_POST['msg']));
		redirect("home");
		
    }
   

    

}
?>