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

class controller_compro extends Controller {

	//region index

	public function index()
	{
		$model_cmpInfo = model_cmpinfo::all()->toArray();

		return view('backend.compro.index')->with([
				'model_cmpInfo'	=> $model_cmpInfo
			]);
	}
	//endregion

	//region getEditorData

	/**
	 * Datatables : untuk mendapatkan data compInfo
	 */

	public function getEditorData()
	{
		include_once( app_path()."/Includes/DataTables/PHP/DataTables.php" );

		Editor::inst( $db, 'cmp_info', 'info_key')
			->fields(
				Field::inst( 'info_key' )->validator( 'Validate::notEmpty' ),
				Field::inst( 'info_value' )->validator( 'Validate::notEmpty' )
			)
			->process( $_POST )
			->json();
	}
	//endregion

	public function testing()
	{
		dd($_POST);
	}
}
