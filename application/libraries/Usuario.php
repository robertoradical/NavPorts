<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Usuario{
        
         protected $DI;
         
         
    public function __construct(){
        
        $this->DI =& get_instance();
    }
    
    public function tipoUser(){
        
        $user = $this->DI->session->userdata('_ID');
        
        if($user === "admin")
        {
            return(0);
            
        }else if($user === "usuario")
        {
            return(1);
            
        }else
        {
            return(2);
            
        }
    }
    
    public function redictUser(){
        
        $user = $this->DI->session->userdata('_ID');
        
        if($user === "admin")
        {
            $data['redict']="painel-admin";
            return($data);
            
        }else if($user === "usuario")
        {
            $data['redict']="modo-jogo";
            return($data);
            
        }else
        {
            $data['redict']="login";
            return($data);
            
        }
    }
    }

?>