<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class KsabihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        //
        DB::table('ksabih')->insert([
            'name'=>'Khurram Sabih',
            'email'=>Str::random(10).'@gmail.com',
            'age'=>45,
            'password' => Hash::make('adminPassword')            
        ]);
    }
}

