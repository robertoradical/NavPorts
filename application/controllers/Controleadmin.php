<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controleadmin extends CI_Controller {

    public function cadastra(){
    	if($this->usuario->tipoUser() === 0)
    	{
    		$this->cabecalho->head();
    		$this->load->view('cadastraadmin');
    		$this->load->view('footer');
    		
    	}else{
    		 redirect('Acesso-Restrito');
    	}
    		
    }
    
    
    public function cadastraCat(){
    	if($this->usuario->tipoUser() === 0)
    	{
    		$this->cabecalho->head();
    		$this->load->view('cadastracategoria');
    		$this->load->view('footer');
    	}else{
    		 redirect('Acesso-Restrito');
    	}
    }
    
    public function alteraperg()
    {
    	if($this->usuario->tipoUser() === 0)
    	{
    		require_once APPPATH."models/pergunta.php";
			$this->load->model('model');
			$m = $this->model;
			$cont = $m->searchAllCat_Perg();
			$cat = $m->searchAllAlter();
			$data['perg'] = $cont;
			$data['alter'] = $cat;
			//print_r($cont);
			$this->cabecalho->head();
    		$this->load->view('alterapergunta',$data);
    		$this->load->view('footer');
    	}else{
    		 redirect('Acesso-Restrito');
    	}
    }
    
    
    
    public function alteracat()
    {
    	if($this->usuario->tipoUser() === 0)
    	{	
    		require_once APPPATH."models/categoria.php";
			$this->load->model('model');
			$m = $this->model;
			$cont = $m->searchAllCat();
			$data['cat'] = $cont;
			$this->cabecalho->head();
    		$this->load->view('alteracategoria',$data);
    		$this->load->view('footer');
    	}else
    	{
    		 redirect('Acesso-Restrito');
    	}
    }
    
    public function cadastroCat(){
        require_once APPPATH."models/categoria.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insertCat(new Categoria($_POST['nome']));
		redirect('cadastra-categoria');
		
    }
    
    
    public function cadastro(){
        require_once APPPATH."models/caduser.php";
		$this->load->model('model');
		$m = $this->model;
		$yd = $this->model->verifEmail($_POST['email']);
		if($yd === "0")
		{
			$m->insertadmin(new Administrador($_POST['telefone'],$_POST['nome'],$_POST['email'],$_POST['senha']));
			redirect('painel-admin');
		}else
		{
			echo "<h1>"."ESTE EMAIL JA FOI CADASTRADO EM NOSSA BASE DE DADOS"."</h1>"; 	
		}
	}
    
    public function cadastroPerg(){
        require_once APPPATH."models/pergunta.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insertPerg(new Alternativas($_POST['categoria'],$_POST['nome'],$_POST['correta']));
		$m->insertPerg2(new Alternativas2($_POST['nome'],$_POST['incorreta1']));
		$m->insertPerg2(new Alternativas2($_POST['nome'],$_POST['incorreta2']));
		$m->insertPerg2(new Alternativas2($_POST['nome'],$_POST['incorreta3']));
		$this->cadastraPerg();
    }
    
    public function cadastraPerg()
    {
    	if($this->usuario->tipoUser() === 0)
    	{	
			require_once APPPATH."models/categoria.php";
			$this->load->model('model');
			$m = $this->model;
			$cont = $m->searchAllCat();
			$data['cats'] = $cont;
			$this->cabecalho->head();
			$this->load->view('cadastrapergunta',$data);
			$this->load->view('footer');
    	}else
    	{
    		 redirect('Acesso-Restrito');
    	}
	}
	
	public function deletarcat($id){
		$this->load->model('model');
		if ($this->model->deleteCat($id)) {
			redirect('altera-categoria');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}
	
	public function deletarperg($id){
		$this->load->model('model');
		if ($this->model->deletePerg($id)) {
			redirect('alteraperg');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}
	
	public function alterarcat($id){
		$this->load->model('model');
		$m = $this->model;
		$m->altereCate($_POST['cat'],$id);
		redirect('altera-categoria');
		
	}
	
	public function alterarperg($id){
		$this->load->model('model');
		$m = $this->model;
		$m->alterePerg($_POST['perg'],$id);
		redirect('altera-pergunta');
		
	}
}

?>