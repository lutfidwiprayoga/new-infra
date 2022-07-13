<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TowerProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tower_providers')->delete();

        $tp = array(
            array('id' => '1', 'name' => 'Telkom Infra'),
            array('id' => '2', 'name' => 'PTI'),
            array('id' => '3', 'name' => 'LSP'),
            array('id' => '4', 'name' => 'CMI'),
            array('id' => '5', 'name' => 'ACOM'),
            array('id' => '6', 'name' => 'STP'),
            array('id' => '7', 'name' => 'TBG'),
            array('id' => '8', 'name' => 'DMT'),
            array('id' => '9', 'name' => 'TBG'),
            array('id' => '10', 'name' => 'ABL'),
            array('id' => '11', 'name' => 'EBT'),
            array('id' => '12', 'name' => 'GMT'),
            array('id' => '13', 'name' => 'IBS')
        );
        DB::table('tower_providers')->insert($tp);
    }
}
