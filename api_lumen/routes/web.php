<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


  // $router->group(['prefix' => 'api'], function () use ($router) {    
$router->get('spmilaporanunits', 'SpmilaporanunitController@index');
$router->get('spmilaporanunitsadmin', 'SpmilaporanunitController@indexadmin');      
$router->get('spmilaporanunits/{id}', 'SpmilaporanunitController@show');   
$router->post('spmilaporanunits', 'SpmilaporanunitController@create');   
$router->put('spmilaporanunits/{id}', 'SpmilaporanunitController@update');   
$router->delete('spmilaporanunits/{id}', 'SpmilaporanunitController@delete');
// $router->get('spmilaporanunits/datatable', 'SpmilaporanunitController@datatable'); 
// $app->get('categories', 'CategoryController@index');   
// $app->get('categories/{id}', 'CategoryController@show');   
// $app->post('categories', 'CategoryController@store');    
// $app->put('categories/{id}', 'CategoryController@update');  
// $app->delete('categories/{id}', 'CategoryController@delete'); 

$router->get('spmidaftartiliks', 'SpmidaftartilikController@index'); 
$router->get('spmilaporanunits/datatable', 'SpmilaporanunitController@datatable');

$router->get('spmirevisilaporanunits', 'SpmirevisilaporanunitController@index');

  // });
