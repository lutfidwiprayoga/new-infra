<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_ids')->delete();

        $site_id = array(
            array('id' => '1', 'name' => 'COF'),
            array('id' => '2', 'name' => 'BDO'),
            array('id' => '3', 'name' => 'BJO'),
            array('id' => '4', 'name' => 'BWI'),
            array('id' => '5', 'name' => 'GSK'),
            array('id' => '6', 'name' => 'JBR'),
            array('id' => '7', 'name' => 'JMB'),
            array('id' => '8', 'name' => 'KED'),
            array('id' => '9', 'name' => 'KPJ'),
            array('id' => '10', 'name' => 'LMJ'),
            array('id' => '11', 'name' => 'MDU'),
            array('id' => '12', 'name' => 'MGT'),
            array('id' => '13', 'name' => 'MJO'),
            array('id' => '14', 'name' => 'NJK'),
            array('id' => '15', 'name' => 'NWI'),
            array('id' => '16', 'name' => 'PAE'),
            array('id' => '17', 'name' => 'PRO'),
            array('id' => '18', 'name' => 'PSN'),
            array('id' => '19', 'name' => 'SDA'),
            array('id' => '20', 'name' => 'SIT'),
            array('id' => '21', 'name' => 'SMP'),
            array('id' => '22', 'name' => 'SPG'),
            array('id' => '23', 'name' => 'SYX'),
            array('id' => '24', 'name' => 'TAG'),
            array('id' => '25', 'name' => 'SBY'),
            array('id' => '26', 'name' => 'SBX'),
            array('id' => '27', 'name' => 'BKN'),
            array('id' => '28', 'name' => 'PMN'),
            array('id' => '29', 'name' => 'MLG'),
            array('id' => '30', 'name' => 'BTU'),
            array('id' => '31', 'name' => 'LMG'),
            array('id' => '32', 'name' => 'TBN'),
            array('id' => '33', 'name' => 'PBO'),
            array('id' => '34', 'name' => 'TGK'),
            array('id' => '35', 'name' => 'BLR'),
            array('id' => '36', 'name' => 'PCN'),
            array('id' => '37', 'name' => 'BGL'),
        );
        DB::table('site_ids')->insert($site_id);
    }
}
