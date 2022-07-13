<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfraTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infra_types')->delete();

        $infra_type = array(
            array('id' => '1', 'tp_id' => '1', 'name' => 'Combat Relocation'),
            array('id' => '2',  'tp_id' => '8', 'name' => 'B2S'),
            array('id' => '3',  'tp_id' => '9', 'name' => 'B2S'),
            array('id' => '4',  'tp_id' => '12', 'name' => 'B2S'),
            array('id' => '5',  'tp_id' => '10', 'name' => 'Collo TP'),
            array('id' => '6',  'tp_id' => '5', 'name' => 'Collo TP'),
            array('id' => '7',  'tp_id' => '4', 'name' => 'Collo TP'),
            array('id' => '8',  'tp_id' => '11', 'name' => 'Collo TP'),
            array('id' => '9',  'tp_id' => '12', 'name' => 'Collo TP'),
            array('id' => '10',  'tp_id' => '13', 'name' => 'Collo TP'),
            array('id' => '11',  'tp_id' => '3', 'name' => 'Collo TP'),
            array('id' => '12',  'tp_id' => '2', 'name' => 'Collo TP'),
            array('id' => '13',  'tp_id' => '6', 'name' => 'Collo TP'),
            array('id' => '14',  'tp_id' => '7', 'name' => 'Collo TP'),
        );
        DB::table('infra_types')->insert($infra_type);
    }
}
