<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['tindakan']                  = 'master/tindakan';
$route['tindakan/create']           = 'master/tindakan/create';
$route['tindakan/store']            = 'master/tindakan/store';
$route['tindakan/edit']             = 'master/tindakan/edit';
$route['tindakan/update']           = 'master/tindakan/update';
$route['tindakan/destroy']          = 'master/tindakan/destroy';
