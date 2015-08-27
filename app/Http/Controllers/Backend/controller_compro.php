<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\model_cmpinfo;

use Illuminate\Http\Request;

use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;
use Illuminate\Validation\Validator;

class controller_compro extends Controller {

	//region index

	public function index()
	{
		$model_cmpInfo = model_cmpinfo::all(['info_key','info_value'])->toArray();

		return view('backend.compro.index')->with([
				'model_cmpInfo'	=> $model_cmpInfo
			]);
	}
	//endregion

	public function editCompro(Request $request)
	{
		$err = array();
		if ($_POST['_type'] == 3) {
			$model_cmpInfo = model_cmpinfo::find($_POST['info_firstKey']);
			$model_cmpInfo->delete();
		}else{
			if ($_POST['_type'] == 1) {
				$model_cmpInfo = new model_cmpinfo();
				if(model_cmpinfo::find($_POST['info_key']))
				{
					$err[] = 'Key "'.$_POST['info_key'].'" telah digunakan';
				}else{
					$model_cmpInfo['info_key'] = $_POST['info_key'];
					$model_cmpInfo['info_value'] = $_POST['info_value'];
					$model_cmpInfo->save();
				}
			} else if ($_POST['_type'] == 2) {
				$model_cmpInfo = model_cmpinfo::find($_POST['info_firstKey']);
				$model_cmpInfo['info_key'] = $_POST['info_key'];
				$model_cmpInfo['info_value'] = $_POST['info_value'];
				$model_cmpInfo->save();
			}
		}
		return redirect('/backend/compro')->withErrors($err);
	}

	public function tes()
	{
		dd($_POST);
	}
}
