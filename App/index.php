<?php

/*Se estou usando a classe PessoaController, preciso dar o include*/
include 'Controller/PessoaController.php';


/* 
parse_url: 1ºParametro é a url que o usuario ta tentando acessar, 2º é um parametro de configuração, o caminho que o usuario ta tentando acessar 
$_SERVER['REQUEST_URI']: Consigo pegar o que o usuario ta tentando acessar
*/

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $url;


switch($url)
{
      case '/':
	echo "página inicial";
      break;

      //como são metodos staticos vou chamar com operador de resolução de escopo ::
      case '/pessoa':
	PessoaController::index();
      break;

      case '/pessoa/form':
	PessoaController::form();
      break;

      case '/pessoa/form/save':
	PessoaController::save();
      break;

      default:
	echo "Erro 404";
      break;
}




