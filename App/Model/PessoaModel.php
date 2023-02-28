<?php

class PessoaModel 
{
    //replicando as colunas do banco de dados(propriedades da classe)
    public $id, $nome, $cpf, $data_nascimento;

    //metodo
    public function save()
    {
        //chamo o arquivo da DAO e passo todos os dados do formularios pra ele
        include 'DAO/PessoaDAO.php';

        //Criando novo objeto
        $dao = new PessoaDAO();

        //this é a instancia de td meu objeto
        $dao->insert($this);
    }

}