<?php
defined('BASEPATH') or exit('No direct script access allowed');
// $route['default_controller'] = 'welcome';
$route['default_controller'] = 'barang'; 

$route['api/barang'] = 'Barang/index';
$route['api/barang/add'] = 'Barang/add'; 
$route['api/barang/edit/(:num)'] = 'Barang/edit/$1';
$route['api/barang/delete/(:num)'] = 'Barang/delete/$1';

$route['satuan'] = 'Controller_Inventory/satuan'; 
$route['satuan/create'] = 'Controller_Inventory/create_satuan';
$route['satuan/store'] = 'Controller_Inventory/store_satuan'; 
$route['satuan/edit/(:num)'] = 'Controller_Inventory/edit_satuan/$1'; 
$route['satuan/update/(:num)'] = 'Controller_Inventory/update_satuan/$1'; 
$route['satuan/delete/(:num)'] = 'Controller_Inventory/delete_satuan/$1'; 

$route['kategori'] = 'Controller_Inventory/kategori'; 
$route['kategori/create'] = 'Controller_Inventory/create_kategori';
$route['kategori/store'] = 'Controller_Inventory/store_kategori';
$route['kategori/edit/(:num)'] = 'Controller_Inventory/edit_kategori/$1';
$route['kategori/update/(:num)'] = 'Controller_Inventory/update_kategori/$1'; 
$route['kategori/delete/(:num)'] = 'Controller_Inventory/delete_kategori/$1'; 

$route['lokasi'] = 'Controller_Inventory/lokasi'; 
$route['lokasi/create'] = 'Controller_Inventory/create_lokasi';
$route['lokasi/store'] = 'Controller_Inventory/store_lokasi'; 
$route['lokasi/edit/(:num)'] = 'Controller_Inventory/edit_lokasi/$1'; 
$route['lokasi/update/(:num)'] = 'Controller_Inventory/update_lokasi/$1'; 
$route['lokasi/delete/(:num)'] = 'Controller_Inventory/delete_lokasi/$1'; 

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
