<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\Donate;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laravel\Lumen\Http\Redirector;
class AdminController extends Controller
{
  public function index()
  {
    $feedback_limit = app('db')->select('SELECT * FROM feedback ORDER BY created_at DESC LIMIT 2');
    $feedback_limit = json_decode(json_encode($feedback_limit), true);
    $feedback_count = app('db')->select('SELECT COUNT(id) FROM feedback ');
    $feedback_count = json_decode(json_encode($feedback_count), true);

    $donate_count = app('db')->select('SELECT SUM(value) FROM donates ');
    $donate_count = json_decode(json_encode($donate_count), true);

    $donate_safira = app('db')->select("SELECT SUM(value) FROM donates  WHERE category = 'Safira'");
    $donate_safira = json_decode(json_encode($donate_safira), true);

    $donate_pesquisas = app('db')->select("SELECT SUM(value) FROM donates  WHERE category = 'Pesquisas'");
    $donate_pesquisas = json_decode(json_encode($donate_pesquisas), true);

    // AS Métas são estabelecidas aqui
    $meta_safira = '50000';
    $meta_pesquisa = '10000';
    return view('admin',[
      'feedback'=>$feedback_limit,
      'feedbackall'=>$feedback_count,
      'donates'=>$donate_count,
      'donatesSafira'=>$donate_safira,
      'donatesPesquisas'=>$donate_pesquisas,
      'metassafira'=>$meta_safira,
      'metaspesquisa'=>$meta_pesquisa,
      'restantepesq'=> ($donate_pesquisas[0]['SUM(value)'] - $meta_pesquisa ),
      'restantesafira'=>($donate_safira[0]['SUM(value)'] - $meta_safira),
      'url'=> null
    ]);
  }
  public function list(Request $a)
  {
  $searchbox = $a->get('searchbox');
  $filte = $a->get('filter');
  if(is_null($filte)){ $filte = 'name';}
  $result = DB::table('feedback')
       ->select(DB::raw("*"))
       ->where($filte, 'Like', '%'.$searchbox.'%')
       ->get();
  $result = json_decode(json_encode($result), true);
  $feedbacks = Feedback::all();
  return view('feedback',[
    'feedback'=>$feedbacks,
    'url'=>'../',
    'result_search'=>$result,'search'=>$searchbox
  ]);

  }
  public function destroy($id)
  {
    try{
      $feedback = Feedback::findOrFail($id);
      $feedback->delete();
      return redirect()->route('feedback');
    }catch(ModelNotFoundException $err){
      return redirect()->route('feedback');
    }

  }
  public function donate(Request $request)
  {
    $donation = Donate::create($request->all());
      return view('thankyou',['url'=>'../']);
  }
}
