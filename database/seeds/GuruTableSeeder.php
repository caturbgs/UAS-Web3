<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 35; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('guru')->insert([
    			'nip' => $faker->nik(),
    			'nama_guru' => $faker->name,
    			'tgl_lahir' => $faker->date('Y-m-d', '1994-10-02'),
    			'jk' => $faker->randomElement($array = array('P', 'L')),
                'alamat' => $faker->address,
                'no_telp' => $faker->phoneNumber,
                'email' => $faker->email
    		]);
        }
    }
}
