<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
 * AUTHENTICATION
 */
 $route['login'] = "Auth/index";
 $route['criar_conta'] = "Auth/index_reg";
 $route['registar'] = "Auth/register";
 $route['entrar'] = "Auth/login";
 $route['sair'] = "Auth/logout";

/*
 * DASHBOARD
 */
$route['dashboard'] = "Dashboard/index";

/*
 * CLIENTS
 */
$route['clientes'] = "Clients/index";
$route['detalhes_cliente/(:num)'] = "Clients/Details/$1";

/*
 * OCURRENCES
 */
$route['ocorrencias'] = "Ocurrences/index";
$route['adicionar_ocurrencia'] = "Ocurrences/add";
$route['save'] = "Ocurrences/Save";
$route['update_ocurrence'] = "Ocurrences/Update";
$route['detalhes_ocorrencia/(:num)'] = "Ocurrences/Details/$1";
$route['editar_ocorrencia/(:num)'] = "Ocurrences/Edit/$1";
$route['eliminar_ocorrencia/(:num)'] = "Ocurrences/Delete/$1";
$route['ocurrencias_fechadas'] = "Ocurrences/ocurrences_closed";
