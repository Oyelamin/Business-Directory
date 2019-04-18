<?php
/**
 * All routes will be registered here
 */

$router->get('admin/register','AuthsController@register');

$router->post('admin/register','AuthsController@store_registered_user');
$router->get('admin/home','AuthsController@home');

$router->get('admin/login','AuthsController@login');
$router->post('admin/login','AuthsController@validate_user_login');
$router->get('admin/logout','AuthsController@logout');
$router->get('admin/businesses/create','BusinessesController@create');
$router->get('admin/businesses','BusinessesController@index');
$router->post('admin/businesses','BusinessesController@store');
$router->get('admin/categories/create','CategoriesController@create');
$router->get('admin/categories','CategoriesController@index');
$router->post('admin/categories','CategoriesController@store');
//Businesses Modification
$router->get('admin/businesses/edit','BusinessesController@edit');//Edit business informations
$router->post('admin/businesses/edit','BusinessesController@update');   //Update the changes
$router->get('admin/businesses/delete','BusinessesController@destroy');//Delete Business
//Categories Modification
$router->get('admin/categories/delete','CategoriesController@destroy');    //Delete a category
$router->get('admin/businesses/add_category','CategoriesController@addToBusiness'); //Add Categories To business
$router->post('admin/businesses/add_category','CategoriesController@storeBusinessCategory'); //Store category

//Query Tests Goes Here

$router->get('query','queryTesterController@index');

//Public page
$router->get('business','PublicController@index');
$router->get('business/search','PublicController@search');