<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\model_portfolio;

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
		$model_portfolio = model_portfolio::all([
				'id',
				'name',
				'description'
			])->toArray();

		return view('backend.portfolio.index')->with([
				'model_portfolio'	=> $model_portfolio
			]);
	}

	public function editPortfolio()
	{

	}

	public function testing()
	{
		dd($_FILES);
	}
}
