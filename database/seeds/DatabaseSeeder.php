<?php
use App\Models\model_cmpinfo;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('cmpInfoTableSeeder');
	}

}
class cmpInfoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('cmp_info')->delete();
        model_cmpinfo::create(['info_key' => 'NAME','info_value'=>'BITSolution']);
        user::create(['email' => 'foo@bar.com']);
        //model_cmpinfo::create(['info_key' => 'CITY','info_value'=>'Surabaya']);
    }

}