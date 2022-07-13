<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgressRegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('progres_regions')->delete();

        $progressregion = array(
            array('id' => '1', 'simple_progress_id' => '1', 'progress_hq_id' => '1', 'name' => '14. HOLD'),
            array('id' => '2', 'simple_progress_id' => '1', 'progress_hq_id' => '2', 'name' => '15. DROP'),
            array('id' => '3', 'simple_progress_id' => '2', 'progress_hq_id' => '3', 'name' => '00. WAITING KOM/KKST'),
            array('id' => '4', 'simple_progress_id' => '2', 'progress_hq_id' => '4', 'name' => '01. SURVEY'),
            array('id' => '5', 'simple_progress_id' => '2', 'progress_hq_id' => '5', 'name' => '02. DRM'),
            array('id' => '6', 'simple_progress_id' => '2', 'progress_hq_id' => '6', 'name' => '03. CANCEL'),
            array('id' => '7', 'simple_progress_id' => '2', 'progress_hq_id' => '7', 'name' => '04. BAN/BAK'),
            array('id' => '8', 'simple_progress_id' => '2', 'progress_hq_id' => '7', 'name' => '05. IW OG'),
            array('id' => '9', 'simple_progress_id' => '2', 'progress_hq_id' => '7', 'name' => '06. REKOM/PERIZINAN'),
            array('id' => '10', 'simple_progress_id' => '2', 'progress_hq_id' => '8', 'name' => '07. RFC'),
            array('id' => '11', 'simple_progress_id' => '2', 'progress_hq_id' => '9', 'name' => '08. CME OG'),
            array('id' => '12', 'simple_progress_id' => '2', 'progress_hq_id' => '9', 'name' => '09. PLN CONECCTION'),
            array('id' => '13', 'simple_progress_id' => '4', 'progress_hq_id' => '10', 'name' => '10. RFI'),
            array('id' => '14', 'simple_progress_id' => '3', 'progress_hq_id' => '11', 'name' => '11. LV MONITORING'),
            array('id' => '15', 'simple_progress_id' => '3', 'progress_hq_id' => '11', 'name' => '12. CONNECTED'),
            array('id' => '16', 'simple_progress_id' => '3', 'progress_hq_id' => '11', 'name' => '13. ON AIR'),
            array('id' => '17', 'simple_progress_id' => '5', 'progress_hq_id' => '12', 'name' => '16. RE-KOM/KKST'),
        );
        DB::table('progres_regions')->insert($progressregion);
    }
}
