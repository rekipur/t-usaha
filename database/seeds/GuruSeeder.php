<?php

use Illuminate\Database\Seeder;
use App\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $guru = Guru::create([
        	'nama'=>'Mahmud Suaib',
        	'jabatan'=>'Guru Mapel',
        	'email'=>'mahmud@gmail.com',
        	'alamat'=>'Bengkulu'
        	]);
    }
}
