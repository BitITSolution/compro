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
		return view('backend.portfolio.index');
	}

	public function getEditorData()
	{
		include_once( app_path()."/Includes/DataTables/PHP/DataTables.php" );

		Editor::inst( $db, 'portfolio', 'id')
			->fields(
				Field::inst( 'portfolio.name' )->validator( 'Validate::notEmpty' ),
				Field::inst( 'portfolio.description' )->validator( 'Validate::notEmpty' )
			)
			//->leftJoin('portfolio_image', 'portfolio_image.portfolio_id','=', 'portfolio.id')
			->process( $_POST )
			->json();
	}

	public function testing()
	{
		dd($_FILES);
	}
}
