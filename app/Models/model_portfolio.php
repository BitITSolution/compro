<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_portfolio extends Model {
	protected $table = 'portfolio';
	protected $primaryKey = 'portfolio_id';
	protected $fillable = 	[
		'portfolio_name',
		'portfolio_description',
		'portfolio_status',
	];

	//

}
