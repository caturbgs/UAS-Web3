<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 30; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('siswa')->insert([
    			'nis' => $faker->nik(),
    			'nama_siswa' => $faker->name,
    			'tgl_lahir' => $faker->date('Y-m-d', '2000-08-25'),
    			'jk' => $faker->randomElement($array = array('P', 'L')),
                'alamat' => $faker->address,
                'no_telp' => $faker->phoneNumber,
                'id_kelas' => 8
    		]);

    	}
    }
}
