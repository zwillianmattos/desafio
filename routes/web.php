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

//EXIBIR LANDINGPAGE
$router->get('/','LpController@index');
$router->group(['prefix'=>'/admin'], function () use ($router) {
  $router->get('/', 'AdminController@index');
  $router->get('/feedback',['as' => 'feedback', 'uses' => 'AdminController@list']);
  $router->post('/feedback', 'Api\FeedbackController@store');
  $router->get('/feedback/rem/{id}', 'AdminController@destroy');
  $router->post('/donate', 'AdminController@donate');
  // $router->delete('/feedback/{id}', 'Api\FeedbackController@destroy');
  // $router->put('/feedback/{id}', 'Api\FeedbackController@update'); //ATUALIZAR Usuário
});
$router->get('/safira','LpController@demo');
// $router->get('/thankyou','LpController@thankyou');
