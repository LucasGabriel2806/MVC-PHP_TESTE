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
	//Despejo da var post
	var_dump($_POST);
    }


}