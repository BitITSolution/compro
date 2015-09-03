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
		 $this->call('userTableSeeder');
		 $this->call('projectTypeTableSeeder');
		 $this->call('portfolioTableSeeder');
		 $this->call('portfolioImageTableSeeder');
		 $this->call('customerMessageTableSeeder');
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

class userTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
        ['user_name' => 'a','user_email' => 'a@a.com','user_password' => '$2y$10$UfwJR.Zg4z7.h5H.oTqddeEVLThYTvNnNyebs.iOl2H2b6jo0eEYq'],
        ));
    }

}

class projectTypeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('project_type')->delete();
        DB::table('project_type')->insert(array(
        ['project_type_name' => 'Website'],
        ['project_type_name' => 'Apps'],
        ['project_type_name' => 'Online Shop'],
        ['project_type_name' => 'Message'],
        ));
    }

}

class portfolioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('portfolio')->delete();
        DB::table('portfolio')->insert(array(
        ['portfolio_name' => 'Website Online shop ABC','portfolio_description'=>'Online shop ABC bergerak di bidang penjualan makanan ringan. Website company profile yang kami buatkan mencakup fitur-fitur seperti profil perusahaan, katalog makanan ringan yang dijual, dan sebagainya.'],
        ['portfolio_name' => 'Website Perusahaan DEF','portfolio_description'=>'Perusahaan DEF bergerak di bidang periklanan. Website untuk perusahaan DEF ini dibuat semenarik mungkin dengan tujuan meningkatkan daya tarik perusahaan mengingat perusahaan ini bergerak dibidang periklanan.'],
        ['portfolio_name' => 'Apps untuk Perusahaan GHI','portfolio_description'=>'Kami juga menyediakan jasa untuk membuatkan apps pada android dan iphone. Seperti yang dapat dilihat pada galeri, kami membuatkan apps untuk perusahaan GHI ini.']
        ));
    }

}

class portfolioImageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('portfolio_image')->delete();
        DB::table('portfolio_image')->insert(array(
        ['portfolio_image_title' => 'Online shop Perusahaan ABC','portfolio_image_description' => 'Gambar ini merupakan halaman utama dari website online shop ABC','portfolio_id' => '1'],
        ['portfolio_image_title' => 'Katalog Online shop ABC','portfolio_image_description' => 'Gambar ini merupakan katalog produk-produk makanan ringan yang dijual oleh online shop ABC','portfolio_id' => '1'],
        ['portfolio_image_title' => 'Website Perusahaan DEF','portfolio_image_description' => 'Gambar ini merupakan halaman utama oleh perusahaan DEF','portfolio_id' => '2'],
        ['portfolio_image_title' => 'Portfolio Perusahaan DEF','portfolio_image_description' => 'Gambar ini merupakan branding-branding terkenal yang telah dihasilkan oleh perusahaan DEF','portfolio_id' => '2'],
        ['portfolio_image_title' => 'Apps Perusahaan GHI','portfolio_image_description' => 'Gambar ini merupakan apps perusahaan DEF','portfolio_id' => '3'],
        ['portfolio_image_title' => 'Apps perusahaan GHI di Play store dan Apps store','portfolio_image_description' => 'Apps perusahaan GHI telah tersedia di Play store dan Apps store.','portfolio_id' => '3']
        ));
    }

}

class customerMessageTableSeeder extends Seeder {

	public function run()
	{
		DB::table('customer_message')->delete();
		DB::table('customer_message')->insert(array(
			['message_name' => 'Budi','message_address' => 'Jalan XYZ no 1','message_email' => 'budi@a.com','project_type_id' => '1','message_description' => 'Butuh dibuatkan website untuk toko saya, mencakup juga katalog barang-barang saya','message_start_date' => '2015-07-01 00:00:00','message_end_date' => '2015-09-01 00:00:00','message_budget' => 'Lebih dari 5 Juta','message_type' => '0'],
			['message_name' => 'Anton','message_address' => 'Jalan PQR no 1','message_email' => 'anton@a.com','project_type_id' => '2','message_description' => 'Butuh dibuatkan apps untuk keperluan pribadi dengan fungsi sebagai reminder pribadi','message_start_date' => '2015-07-01 00:00:00','message_end_date' => '2015-09-01 00:00:00','message_budget' => '0 - 1 Juta','message_type' => '0']
		));

		DB::table('customer_message')->insert(array(
			['message_name' => 'Ani','message_address' => 'Jalan XYZ no 1','message_email' => 'ani@a.com','project_type_id' => '4','message_description' => 'Kira-kira berapa biaya untuk membuat sebuah sistem untuk sebuah perusahaan? Saya melihat belum ada opsi penawaran pembuatan sistem perusahaan di project planner ini.','message_type' => '0']
		));
	}

}