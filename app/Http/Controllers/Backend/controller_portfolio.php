<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\model_portfolio;

use Illuminate\Http\Request;

use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

class controller_portfolio extends Controller {

	public function index()
	{
		$model_portfolio = model_portfolio::where('portfolio_status','1')->get([
				'portfolio_id',
				'portfolio_name',
				'portfolio_description'
			])->where(['portfolio_status'=>1])->toArray();

		return view('backend.portfolio.index')->with([
				'model_portfolio'	=> $model_portfolio
			]);
	}

	public function editPortfolio(Request $request)
	{
		$err = array();
		if ($_POST['_type'] == 3) {
			$model_portfolio = model_portfolio::find($_POST['portfolio_id']);
			$model_portfolio['portfolio_status'] = 0;
			$model_portfolio->save();
		}else{
			if ($_POST['_type'] == 1) {
				$model_portfolio = new model_portfolio();
				$model_portfolio['portfolio_name'] = $_POST['portfolio_name'];
				$model_portfolio['portfolio_description'] = $_POST['portfolio_description'];
				$model_portfolio->save();
			} else if ($_POST['_type'] == 2) {
				$model_portfolio = model_portfolio::find($_POST['portfolio_id']);
				$model_portfolio['portfolio_name'] = $_POST['portfolio_name'];
				$model_portfolio['portfolio_description'] = $_POST['portfolio_description'];
				$model_portfolio->save();
			}
		}
		return redirect('/backend/portfolio')->withErrors($err);
	}

	public function testing()
	{
		dd($_FILES);
	}
}
