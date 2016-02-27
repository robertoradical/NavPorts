<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'Controle/home';
$route['404_override'] = 'Controuser/error';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Controle/login';
$route['home'] = 'Controle/home';
$route['contato'] = 'Controle/contato';
$route['sobre'] = 'Controle/sobre';
$route['painel-user'] = 'Controuser/painel';
$route['configuracoes'] = 'Controuser/configuracoes';
$route['modo-jogo'] = 'Controuser/modo_jogo';
$route['categorias'] = 'Controuser/categorias';
$route['painel-admin'] = 'Controleadmin/cadastra';
$route['aleatorio'] = 'Controuser/questao';
$route['cadastra-categoria'] = 'Controleadmin/cadastraCat';
$route['cad_cat'] = 'Controleadmin/cadastroCat';
$route['cadastra-pergunta'] = 'Controleadmin/cadastraPerg';
$route['cadastra-admin'] = 'Controleadmin/cadastro';
$route['pergunta-cadastrada'] = 'Controleadmin/cadastroPerg';
$route['logout'] = 'Controle/logoutuser';
$route['altera-categoria'] = 'Controleadmin/alteracat';
$route['altera-pergunta'] = 'Controleadmin/alteraperg';
$route['logout-admin'] = 'Controle/logoutadmin';
$route['Acesso-Restrito'] = 'Controle/erroAcess';
$route['recupera-senha'] = 'Controuser/recupSenha';
$route['ajuda'] = 'Controuser/ajuda';
$route['valida-user'] = 'Controle/validaLogin';
$route['cadastra-usuario'] = 'Controuser/InsUser';
$route['altera-senha'] = 'Controuser/alteraSenha';
$route['enviar-senha'] = 'Controuser/enviaSenha';
$route['altera-email'] = 'Controuser/alteraEmail';
$route['altera-empresa'] = 'Controuser/alteraEmpresa';
$route['escolha-pergunta/(:num)'] = 'Controuser/escolhaPerg/$1';
$route['questao/(:num)/(:num)'] = 'Controuser/questao/$1/$2';
$route['relatorio-final'] = 'Controuser/relFinal';
$route['escolha-pergunta/logout'] = 'Controle/logoutuser';
$route['verifica-escolha/(:num)'] = 'Controuser/certoErrado/$1';
$route['erro'] = 'Controuser/erro';
$route['sucesso'] = 'Controuser/sucesso';
$route['creditos'] = 'Controle/creditos';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
