<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
 * DASHBOARD
 */
$route['dashboard'] = "Dashboard/index";
/*
 * CLIENTS
 */
$route['clientes'] = "Clients/index";
$route['detalhes_cliente/(:num)'] = "Clients/Details/$1";
$route['login'] = "Clients/index_log";
$route['registar'] = "Clients/index_reg";
$route['criar_conta'] = "Clients/register";
$route['entrar'] = "Clients/login";

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
