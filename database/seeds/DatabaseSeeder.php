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
        DB::table('cmp_info')->insert(array(
        ['info_key' => 'NAME','info_value'=>'BITSolution'],
        ['info_key' => 'CITY','info_value'=>'Surabaya'],
        ['info_key' => 'POSTAL','info_value'=>'60245'],
        ['info_key' => 'COUNTRY','info_value'=>'Indonesia'],
        ['info_key' => 'STATE','info_value'=>'East Java'],
        ['info_key' => 'EMAIL','info_value'=>'admin@bitsolution.com'],
        ['info_key' => 'PHONE','info_value'=>'0812345678'],
        ['info_key' => 'FAX','info_value'=>'+62 31 5038767']
        ));
    }

}