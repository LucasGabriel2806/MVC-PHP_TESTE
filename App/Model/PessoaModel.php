<?php

class PessoaModel 
{
    //replicando as colunas do banco de dados(propriedades da classe)
    public $id, $nome, $cpf, $data_nascimento;

    //armazena as linhas que vem, do bd
    public $rows;

    //metodo
    public function save()
    {
        //chamo o arquivo da DAO e passo todos os dados do formularios pra ele
        include 'DAO/PessoaDAO.php';

        /*Criando novo objeto, instancia da Pessoa DAO, que conecta com o banco de dados*/
        $dao = new PessoaDAO();

        //this é a instancia de td meu objeto
        $dao->insert($this);
    }

    public function getAllRows()
    {
        //Pegue todas as linhas da tabela pessoa
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $this->rows = $dao->select();
        
    }

}