<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\model_cmpinfo;
use App\Models\model_project_type;
use App\Models\model_customer_message;
use Carbon\Carbon;

use Illuminate\Http\Request;

class controller_frontend extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
  public function home() {
    $param["data"] = model_cmpinfo::all();
    return view('view_frontend_homepage',$param);
  }
  public function client() {
    return view('view_frontend_client');
  }

  public function product() {
    return view('view_frontend_product');
  }

  public function career() {
    return view('view_frontend_career');
  }

  public function about() {
    return view('view_frontend_about');
  }

  public function contact() {
    return view('view_frontend_contact');//,['page'=>'contact']);
  }

  public function maxel() {
    return view('view_frontend_maxel');//,['page'=>'maxel']);
  }


  public function planner() {
    $modelProjectType = model_project_type::all()->toArray();
    return view('view_frontend_planner')
      ->with(array(
          'modelProjectType' => $modelProjectType
        ));
  }
  public function submitPlanner(Request $request) {
    $request['start_date'] = Carbon::create($request->get('start_year'), $request->get('start_month'),'01','00','00','00');
    $request['end_date'] = Carbon::create($request->get('end_year'), $request->get('end_month'),'01','00','00','00');
    $request['messageType'] = '1';
    $modelCustomerMessage = new model_customer_message;
    $modelCustomerMessage->fill($request->except([
          'start_month',
          'end_month',
          'start_year',
          'end_year',
        ]));
    if($modelCustomerMessage->save()){
      dd("success");
    }else{
      dd("failed");
    }
    /*$modelCustomerMessage->save($request->except([
          'start_month',
          'end_month',
          'start_year',
          'end_year',
        ]));*/
  }

}
