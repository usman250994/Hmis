<?php namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use Auth;
class DemoController extends Controller {


  	public function index()
	{
    $result = DB::table('trust')->get();
		return view('demo')->with('data',$result);
	}

  public function all()
  {
  return view('patients/profiles');
  }

    public function allnow()
    {
      Session::set('check', '1');
    $result = DB::table('patients')->get();
    return view('patients/profiles')->with('data',$result);
    }

  public function view()
  {
  return view('patients/view');
  }

  public function add()
{
  return view('patients/add');
}

  public function save(Request $request)
{
  //  $name =  $request->all();
  if (Auth::check())
{
  $name = $request->input('name');
  $msg = $request->input('message');
    DB::table('patients')->insert(
     array('name' => $name , 'message' => $msg)
    );
  return view('patients/add');
}

else
  return view('auth/login');


}
public function searchById(Request $request)
{

if (Auth::check())
{
  Session::set('check', '1');
$id = $request->input('id');
$results = DB::select('select * from patients where id = ?', [$id]);
// $results = patients::find(1);

// $phone = Patients::find(1);
return view('patients/profiles')->with('data',$results);
}

else
return view('auth/login');

}}
