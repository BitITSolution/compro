<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_portfolio extends Model {
	protected $table = 'portfolio';
	protected $primaryKey = 'id';
	protected $fillable = 	[
		'name',
		'description',
	];

	//

}
