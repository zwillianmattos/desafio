<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\Donate;
class LpController extends Controller
{
  public function index()
  {
    $meta_safira = '50000';
    $meta_pesquisa = '10000';    
    $donate_count = app('db')->select('SELECT SUM(value) FROM donates ');
    $donate_count = json_decode(json_encode($donate_count), true);

    $donate_safira = app('db')->select("SELECT SUM(value) FROM donates  WHERE category = 'Safira'");
    $donate_safira = json_decode(json_encode($donate_safira), true);

    $donate_pesquisas = app('db')->select("SELECT SUM(value) FROM donates  WHERE category = 'Pesquisas'");
    $donate_pesquisas = json_decode(json_encode($donate_pesquisas), true);
    return view('landingpage',['url'=>null,'donates'=>$donate_count,
    'donatesSafira'=>$donate_safira,
    'donatesPesquisas'=>$donate_pesquisas,
    'metassafira'=>$meta_safira,
    'metaspesquisa'=>$meta_pesquisa,
    'restantepesq'=> ($donate_pesquisas[0]['SUM(value)'] - $meta_pesquisa ),
    'restantesafira'=>($donate_safira[0]['SUM(value)'] - $meta_safira)]);
  }
  public function demo()
  {
    return view('safira',['url'=>null]);
  }
  public function thankyou()
  {
      return view('thankyou',['url'=>null]);
  }
}
