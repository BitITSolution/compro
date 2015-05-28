<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_cmpinfo extends Model {
  protected $table = 'cmp_info';
  protected $primaryKey = 'info_key';
  protected $fillable = ['info_key', 'info_value'];
  
  public function init() {
  }
  public function fields() {
    
  }
}
