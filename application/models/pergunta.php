<?php

class Pergunta{
    
    public $id_categoria,$nm_pergunta;
    
    public function __construct($id_categoria,$nm_pergunta){
        $this->id_categoria = $id_categoria;
        $this->nm_pergunta = $nm_pergunta;
    }
}

class Alternativas extends Pergunta{
    
    public $alternativa;
    
    public function __construct($id_categoria,$nm_pergunta,$alternativa){
        parent::__construct($id_categoria,$nm_pergunta);
        $this->alternativa = $alternativa;
    }
}

class Alternativas2{
    
    public $alternativa;
    
    public function __construct($id_pergunta,$alternativa){
        $this->alternativa = $alternativa;
    }
}
