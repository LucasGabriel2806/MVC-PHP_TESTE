<?php

/*
Metodo construtor:serve pra executar alguma coisa quando a classe é chamada
se estou criando uma classe, é porque quero instancia-la em algum momento pra virar objeto e eu usa-la
Todas as vezes que instancio a class DAO, a conexão com o banco é feita


*/
class PessoaDAO
{
    //propriedade
    private $conexão;

    public function __construct()
    {
	//construtor de classe em php, toda vez que chamo a classe, chamo seu construtor
	//dsn(data source name)conexao com o mysql
	$dsn = "mysql:host=localhost:3307;dbname=db_mvc";
	
	$this->conexao = new PDO($dsn, 'root', 'etecjau');
	
    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO pessoa (nome, cpf, data_nascimento) 
                VALUES (?, ?, ?) "; 

        /*prepare: prepara a string pra executar*/
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        //salva no bd
        $stmt->execute();


        
    }

    public function update(PessoaModel $model)
    {
    
    }

    public function select()
    {

    }

}