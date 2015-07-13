<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_customer_message extends Model {
	protected $table = 'customer_message';
	protected $primaryKey = 'id';
	protected $fillable = 	[
		'name',
		'address',
		'email',
		'description',
		'start_date',
		'end_date',
		'budget',
		'message_type',
		'projectType_id'
	];

}
