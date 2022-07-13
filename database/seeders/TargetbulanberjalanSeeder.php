<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TargetbulanberjalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('targetbulanberjalans')->delete();

        $data = array(
            array('id' => '1', 'simple_progress_id' => '3', 'name' => 'DONE ON AIR (Maret)'),
            array('id' => '2', 'simple_progress_id' => '3', 'name' => 'DONE ON AIR (April)'),
            array('id' => '3', 'simple_progress_id' => '2', 'name' => 'Optimis'),
            array('id' => '4', 'simple_progress_id' => '2', 'name' => 'Pesimis'),
            array('id' => '5', 'simple_progress_id' => '4', 'name' => 'Optimis'),
            array('id' => '6', 'simple_progress_id' => '4', 'name' => 'Pesimis'),
            array('id' => '7', 'simple_progress_id' => '1', 'name' => 'DROP'),
        );
        DB::table('targetbulanberjalans')->insert($data);
    }
}
