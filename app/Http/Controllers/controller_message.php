<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\model_project_type;
use App\Models\model_customer_message;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Http\Request;

class controller_message extends Controller {

	public function projectPlanner()
	{
		$modelProjectType = model_project_type::all()->toArray();
		return view('message.projectPlanner')
			->with(array(
					'modelProjectType' => $modelProjectType
				));
	}

	public function submitProjectPlanner(Request $request)
	{
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
