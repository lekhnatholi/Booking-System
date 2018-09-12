<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('cities')->insert([
            [ 'cities_title'=>'Kathmandu','profile'=>'verified'],
            [ 'cities_title'=>'Jhapa','profile'=>'verified'],
            [ 'cities_title'=>'Hetauda','profile'=>'verified'],
            [ 'cities_title'=>'Kanchanpur','profile'=>'verified'],
            [ 'cities_title'=>'Bardiya','profile'=>'verified'],
        ]);
    }
}
