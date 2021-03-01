<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create many data
        for ($i=0; $i<10; $i++){
            //create seeder (data dummy)
            DB::table('siswas')->insert([
                'nama' => Str::random('10'),
                'alamat' => Str::random('10')
            ]);
        }
    }
}
