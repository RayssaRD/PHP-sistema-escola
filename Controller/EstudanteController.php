<?php
require_once './Model/Estudante.php';

class EstudanteController{
   private $db;
   private $estudante;

   public function __construct(){
        //preparar conexão com BD
        $database = new Database();
        $this->db = $database->getConnection();

        //Instanciar a Model Estudante
        $this->estudante = new Estudante(($this->db));
    }
}

?>