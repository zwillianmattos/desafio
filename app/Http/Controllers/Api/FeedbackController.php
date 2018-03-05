<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
  public function index()
  {
    $feedbacks = Feedback::all();
    return $feedbacks;
  }
  public function show($id)
  {
    $feedback = Feedback::findOrFail($id);
    return $feedback;
  }
  public function search(Request $request)
  {


  }
  public function store(Request $request)
  {
    $feedback = Feedback::create($request->all());
    // return $feedback;
    return view('thankyou',['url'=>'../']);
  }
  public function update(Request $request, $id)
  {
    $feedback = Feedback::findOrFail($id);
    $feedback->update($request->all());
    return $feedback;
  }
  public function destroy($id)
  {
    $feedback = Feedback::findOrFail($id);
    $feedback->delete();
    return $feedback;
  }
  // public function teste()
  // {
  //   $feedback =app('db')->select('SELECT name,email FROM feedback');
  //     return $feedback;
  // }
}
