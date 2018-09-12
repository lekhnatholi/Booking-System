<?php

use Illuminate\Database\Seeder;

class BusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            [ 'buses_title'=>'Mahakali Yatayat','vendors_id'=>1,'vehicle_no'=>'Bha.2.Kha 1212','billbook_no'=>121221,'bustypes_id'=>1],
            [ 'buses_title'=>'Bagmati Yatayat','vendors_id'=>1,'vehicle_no'=>'Bha.2.Kha 1212','billbook_no'=>121221,'bustypes_id'=>2],
            [ 'buses_title'=>'Kaligandaki Yatayat','vendors_id'=>1,'vehicle_no'=>'Bha.2.Kha 1212','billbook_no'=>121221,'bustypes_id'=>1],
            [ 'buses_title'=>'Sutra Yatayat','vendors_id'=>1,'vehicle_no'=>'Bha.2.Kha 1212','billbook_no'=>121221,'bustypes_id'=>2],
            [ 'buses_title'=>'Amrit Yatayat','vendors_id'=>1,'vehicle_no'=>'Bha.2.Kha 1212','billbook_no'=>121221,'bustypes_id'=>3],
            [ 'buses_title'=>'Kulekhani Yatayat','vendors_id'=>1,'vehicle_no'=>'Bha.2.Kha 1212','billbook_no'=>121221,'bustypes_id'=>4],
        ]);
    }
}
