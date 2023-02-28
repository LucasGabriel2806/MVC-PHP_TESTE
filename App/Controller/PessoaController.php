<?php

class PessoaController
{
    //Cada metodo da controller vai ser responsavel por processar uma rota
    public static function index()
    {
	//Responsavel por devolver a listagem dos dados do usuario
	include 'View/modules/Pessoa/ListaPessoa.php';
    }

    public static function form()
    {
	//Devolve o formulario
	include 'View/modules/Pessoa/FormPessoa.php';

    }

    public static function save()
    {
        include 'Model/PessoaModel.php';

        //Criando um objeto
        $model = new PessoaModel();
        //Preenchendo tds propriedades
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];
        
        $model->save();

        header("Location: /pessoa");
    }


}