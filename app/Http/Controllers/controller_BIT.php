<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\model_cmpinfo;

use Illuminate\Http\Request;

class controller_index extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
    $param["data"] = model_cmpinfo::all();
    return view('view_homepage',$param);
	}

	public function contactus()
	{
		//
    $param["data"] = model_cmpinfo::all();
    return view('view_contactus',$param);
	}

	public function portfolio()
	{
		//
    $param["data"] = model_cmpinfo::all();
    return view('view_portfolio',$param);
	}


}
