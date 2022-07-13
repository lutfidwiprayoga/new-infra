<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SimpleProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('simple_progres')->delete();

        $simpleprogress = array(
            array('id' => '1', 'name' => 'DROP/HOLD'),
            array('id' => '2', 'name' => 'NY RFI'),
            array('id' => '3', 'name' => 'ON AIR'),
            array('id' => '4', 'name' => 'RFI'),
            array('id' => '5', 'name' => 'RE-KOM/KKST'),
        );
        DB::table('simple_progres')->insert($simpleprogress);
    }
}
