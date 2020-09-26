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
$route['default_controller'] = 'login/Login/login';
$route['login'] = 'login/Login/login';
$route['createUser'] = 'Register/Register/createAdmin';
$route['dashboard'] = 'dashboard/Dashboard/viewDashBoard';
$route['product'] = 'product/Product/manageProduct';
$route['addCategory'] = 'product/Product/addCategory';
$route['addSubCategory'] = 'product/Product/addSubCategory';
$route['addProduct'] = 'product/Product/addProduct';
$route['manageCategory'] = 'product/Product/manageCategory';
$route['manageSubCategory'] = 'product/Product/manageSubCategory';
$route['editCat/(:num)'] = 'product/Product/editCategory/$1';
$route['editProduct/(:num)'] = 'product/Product/editProduct/$1';
$route['editSubcategory/(:num)'] = 'product/Product/editSubcategory/$1';
$route['deleteCat/(:num)'] = 'product/Product/deleteCategory/$1';
$route['deleteSubCat/(:num)'] = 'product/Product/deleteSubCategory/$1';
$route['updateCategory/(:num)'] = 'product/Product/updateCategory/$1';
$route['updateProduct/(:num)'] = 'product/Product/updateProduct/$1';
$route['updateSubCategory/(:num)'] = 'product/Product/updateSubCategory/$1';
$route['fetchSubCat'] = 'product/Product/getAllSubCategories';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
