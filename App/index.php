<?php



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

      case '/pessoa':
	echo "listagem de pessoa";
      break;

      case '/pessoa/form':
	echo "formluario para salvar pessoa";
      break;

      default:
	echo "Erro 404";
      break;
}




