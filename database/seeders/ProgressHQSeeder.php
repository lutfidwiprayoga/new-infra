<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgressHQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('progres_hqs')->delete();

        $progresshq = array(
            array('id' => '1', 'simple_progress_id' => '1', 'name' => 'HOLD'),
            array('id' => '2', 'simple_progress_id' => '1', 'name' => 'DROP'),
            array('id' => '3', 'simple_progress_id' => '2', 'name' => 'WAITING KOM/KKST'),
            array('id' => '4', 'simple_progress_id' => '2', 'name' => 'SURVEY'),
            array('id' => '5', 'simple_progress_id' => '2', 'name' => 'DRM'),
            array('id' => '6', 'simple_progress_id' => '2', 'name' => 'CANCEL'),
            array('id' => '7', 'simple_progress_id' => '2', 'name' => 'SITAC'),
            array('id' => '8', 'simple_progress_id' => '2', 'name' => 'RFC'),
            array('id' => '9', 'simple_progress_id' => '2', 'name' => 'CME'),
            array('id' => '10', 'simple_progress_id' => '4', 'name' => 'RFI'),
            array('id' => '11', 'simple_progress_id' => '3', 'name' => 'ON AIR'),
            array('id' => '12', 'simple_progress_id' => '5', 'name' => 'RE-KOM/KKST'),
        );
        DB::table('progres_hqs')->insert($progresshq);
    }
}
