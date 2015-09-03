<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_project_type extends Model {
	protected $table = 'project_type';
	protected $primaryKey = 'project_type_id';
	protected $fillable = 	[
		'project_type_name',
		'project_type_status',
							];

}
