<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_customer_message extends Model {
	protected $table = 'customer_message';
	protected $primaryKey = 'message_id';
	protected $fillable = 	[
		'message_name',
		'message_address',
		'message_email',
		'message_description',
		'message_start_date',
		'message_end_date',
		'message_budget',
		'message_type',
		'message_status',
		'project_type_id'
	];

}
