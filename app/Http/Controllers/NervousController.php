<?php namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Auth;
class NervousController extends Controller {

public function view()
{
return view('nervous/view');
}

public function motorTable()
{
$user = DB::table('muscle')->select('rarm','larm','rleg','lleg')->where('id', '1')->take(1);
$nows = DB::table('tone')->select('rarm','larm','rleg','lleg')->where('id', '1')->take(1)->union($user)->get();
return view('nervous/motor')->with('data',$nows);
}

  public function edit(Request $request)
{
  //  $name =  $request->all();
  if (Auth::check())
{
  $rarm = $request->input('rarm');
  $larm = $request->input('larm');
  $rleg = $request->input('rleg');
  $lleg = $request->input('lleg');

  $type = $request->input('type');

  if($type=='tone'){
  // if($rarm!='9'){
// return view('auth/login');
    // }
      DB::table('tone')->where('id', '1')
            ->update(['rarm' => $rarm]);

  }

  if($type=='muscle'){

  }

  if($type=='coordination'){

  }

  $user = DB::table('muscle')->select('rarm','larm','rleg','lleg')->where('id', '1')->take(1);
  $nows = DB::table('tone')->select('rarm','larm','rleg','lleg')->where('id', '1')->take(1)->union($user)->get();
  return view('nervous/motor')->with('data',$nows);

}

else
  return view('auth/login');


}


  }
