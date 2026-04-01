<?php

class Estudante{


    private $conn; 
    private $table = "estudantes"; // nome da tabela no MYSQL

    public function __construct($db){
       $this ->conn = $db; //conn: conncetion = instância para banco de dados( conexão de BD )
    }

    //Listar todos os estudantes (READ)
    public function buscarTodos(){
        $query = "SELECT * FROM" . $this-> table . "ORDER BY nome ASC"; // ASC: ordem alfabética
        $stmt = $this->conn->prepare($query); // prepara para a consulta SQL
        $stmt->execute(); // executa a consulta SQL
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }   

    //Salvar novo estudante (CREATE)

    public function salvar($dados){
        $query = "INSERT INTO". $this->table. "(nome, email, matricula) VALUES (:nome, :email, :matricula)";
        // : serve para a segurança do banco de dados
        $stmt = $this->conn->prepare($query);

        //Blindar SQL
        $stmt -> bindParam(":nome", $dados['nome']);
        $stmt -> bindParam(":email", $dados['email']);
        $stmt -> bindParam(":matricula", $dados['matricula']);

        

        
       
    }

}

?>