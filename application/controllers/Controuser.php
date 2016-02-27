<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controuser extends CI_Controller {
    
    
    // as view do usuario quando logado começam aqui
    //sempre realizando o controle do acesso.
    public function configuracoes()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
    	    $this->load->view('config',$this->cabecalho->user());
    	    $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
    public function painel()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
    	    $this->load->view('painel',$this->cabecalho->user());
    	    $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
    public function modo_jogo()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('modo-jogo');
            $this->load->view('footer');
        }else
        {
            redirect('Acesso-Restrito');
        }
    }
    
    public function erro()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('erro');
            $this->load->view('footer');
        }else
        {
            redirect('Acesso-Restrito');
        }
    }
    
    public function sucesso()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('sucesso');
            $this->load->view('footer');
        }else
        {
            redirect('Acesso-Restrito');
        }
    }
    
     public function recupSenha()
    {
            $this->cabecalho->head();
            $this->load->view('rec_senha');
            $this->load->view('footer');
        
    }
    
    public function perguntaAle()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
           
            $this->load->view('pergunta');
            $this->load->view('footer');
        }else
        {
            redirect('Acesso-Restrito');
        }
    }
    
    public function questao($id,$id2)
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->model('model');
		    $m = $this->model;
		    $cont = $m->searchAllPerg2($id);
		    $cont1 = $m->searchAllCat2($id2);
		    $cont2 = $m->searchAllAlt($id);
		    $data['perg'] = $cont;
		    $data['cat'] = $cont1;
		    $data['alt'] = $cont2;
            $this->load->view('questao',$data);
            $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
    public function certoErrado($tipo)
    {
            if($tipo === "0")
            {
                redirect("sucesso");    
                
            }else
            {
                redirect("erro");
            }
		    
        
    }
    
    public function escolhaPerg( $id )
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->model('model');
		    $m = $this->model;
		    $cont = $m->searchAllPergCat($id);
		    $cont1 = $m->searchAllCat2($id);
		    $data['perg'] = $cont;
		    $data['cat'] = $cont1;
            $this->load->view('escolha-pergunta',$data);
            $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
        
        
        
		
    }
    
    public function relFinal()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('relatorio_final');
            $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
    public function erroEmail($data)
    {
        $this->cabecalho->head();
        $this->load->view('erroEmail',$data);
        $this->load->view('footer');
        
    }
    
    public function error()
    {
        $this->cabecalho->head();
        $this->load->view("erro404");    
        $this->load->view('footer');
    }
    
    public function questAle()
    {
        $this->cabecalho->head();
        $this->load->view("questao_ale");    
        $this->load->view('footer');
    }
    
    public function ajuda()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('ajuda');
            $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
// as views do usuario terminan aqui******************************************************************************************

    
    //função que insere o usuario no banco de dados e verifica se o email a se cadastrar ja esta no banco.
    public function InsUser()
    {
        $empresa = $_POST["empresa"];
        $nome = $_POST["nome"];
        $email2 = $_POST["email2"];
        $senha2 = $_POST["senha2"];
	    $this->load->model("model");
        $ak = $this->model->verifEmail($email2);
		if( $ak === "0")
		{
		    require_once APPPATH."models/caduser.php";
		    $this->load->model('model');
		    $m = $this->model;
		    $m->insertuser(new UsuarioComum($empresa,$nome,$email2,$senha2));
		    redirect('login');
		}else
		{
		    $data['email']=$email2;
		    $this->erroEmail($data);
		}
		
    }
   
    public function categorias()
    {
		require_once APPPATH."models/categoria.php";
		$this->load->model('model');
		$m = $this->model;
		$cont = $m->searchAllCat();
		$data['cats'] = $cont;
		$this->cabecalho->head();
		$this->load->view('categorias',$data);
		$this->load->view('footer');
	}
	
	//Função que altera a senha do usuario.
	public function alteraSenha()
	{
	     $senha_new = $_POST["senha"];
	     $senha_velha = $_POST["senha_antiga"];
	     $this->load->model("model");
         $xd = $this->model->verifSenha($senha_velha,$senha_new);
         if($xd === 0){
             
             redirect("configuracoes");
         }else{
             
             redirect("painel-user");
         }
	 
	}
	
	public function alteraEmail()
	{
	     $email_antigo = $_POST["email_antigo"];
	     $email_novo = $_POST["email_novo"];
	     $this->load->model("model");
	     $yd = $this->model->verifEmail($email_novo);
	     if($yd === "0"){
         $xd = $this->model->verifEmail($email_antigo);
         if($xd === "1")
         {
             $this->model->trocaEmail($email_novo);
             $this->session->set_userdata("_EMAIL", $email_novo);
             redirect("configuracoes");
                     
         }else
         {
            redirect("home");
            
         }}else
         {
            echo "<h1>"."ESTE EMAIL JA FOI CADASTRADO EM NOSSA BASE DE DADOS"."</h1>";    
         }
	 
	}
	
	public function alteraEmpresa()
	{
	     $empresa_antiga = $_POST["empresa_antiga"];
	     $empresa_nova = $_POST["empresa_nova"];
	     $this->load->model("model");
         $xd = $this->model->getEmpresa();
         //print_r($xd);
         if($xd === $empresa_antiga)
         {
             $this->model->trocaEmpresa($empresa_nova);
             redirect("configuracoes");
                     
         }else{
            redirect("home");
            //echo $xd;
         }
	 
	}
	
	//Esta função pega o email do usuario e envia por email a senha dele
	public function enviaSenha()
	{
	    $senha = $_POST["email"];
	    $this->load->model("model");
        $xx = $this->model->pegaSenha($senha);
        if(count($xx) == 1){
            $dados = $xx[0];
            //print_r($dados);
            
            $this->load->library('email');
            $this->email->from('robertoradical9@gmail.com');
            $this->email->to($dados['ds_email']);
            $this->email->subject('NavPorts - Recuperação de Senha');
            $this->email->message($dados['nm_usuario'].' sua senha é '.$dados['ds_senha']);
            
            $this->email->send();
            //echo $this->email->print_debugger();
             
            redirect('home');
        }else
        {
            redirect('recupera-senha');
        }
	}
	
	public function selPerguntas($id){
	    $this->load->model("model");
        $xd = $this->model->getPerguntas($id);
        $result = (int)$xd;
        $data['xor'] = $result;
	    return($data);
	}
	
}

?>