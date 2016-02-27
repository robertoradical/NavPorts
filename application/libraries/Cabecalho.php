<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Cabecalho{
        
         protected $CI;
         
         
    public function __construct(){
        
        $this->CI =& get_instance();
    }
         // Esta função apresenta o o header conforme se tem alguem logado ou não
    public function head(){
        
        if( $this->loguser() === true)
        {
            return($this->CI->load->view('headeron',$this->user()));
            
        }else if( $this->loguser() === false)
        {
            return($this->CI->load->view('header_admin'));
            
        }else
        {
            return($this->CI->load->view('header'));    
        }
    }
    //Função que verifica se o usuario ou admin estão logado 
    public function loguser(){
        //$x= $this->session->userdata('_ID');
        $x = $this->CI->session->userdata('_ID');
        
        if($x === "admin"){
            
            return(false);
        }else if($x === "usuario"){
            return(true);
        }else{
            return(3);
        }
        
    }
    public function user()
    {
        $this->CI->load->model('model');
		$m = $this->CI->model;
		$nm = $m->getNome();
        $data['usu'] = $nm;
        return $data;
    }
    
    }












?>