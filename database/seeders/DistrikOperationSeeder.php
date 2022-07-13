<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrikOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distrik_operations')->delete();

        $do = array(
            array('id' => '1', 'city_id' => '28', 'name' => 'Bangkalan'),
            array('id' => '2', 'city_id' => '24', 'name' => 'Bangkalan'),
            array('id' => '3', 'city_id' => '1', 'name' => 'Banyuwangi'),
            array('id' => '4', 'city_id' => '4', 'name' => 'Banyuwangi'),
            array('id' => '5', 'city_id' => '2', 'name' => 'Jember'),
            array('id' => '6', 'city_id' => '8', 'name' => 'Jember'),
            array('id' => '7', 'city_id' => '14', 'name' => 'Kediri'),
            array('id' => '8', 'city_id' => '10', 'name' => 'Kediri'),
            array('id' => '9', 'city_id' => '11', 'name' => 'Kediri'),
            array('id' => '10', 'city_id' => '9', 'name' => 'Kediri'),
            array('id' => '11', 'city_id' => '29', 'name' => 'Lamongan'),
            array('id' => '12', 'city_id' => '30', 'name' => 'Lamongan'),
            array('id' => '13', 'city_id' => '12', 'name' => 'Madiun'),
            array('id' => '14', 'city_id' => '5', 'name' => 'Madiun'),
            array('id' => '15', 'city_id' => '16', 'name' => 'Malang'),
            array('id' => '16', 'city_id' => '17', 'name' => 'Malang'),
            array('id' => '17', 'city_id' => '31', 'name' => 'Malang'),
            array('id' => '18', 'city_id' => '32', 'name' => 'Pamekasan'),
            array('id' => '19', 'city_id' => '23', 'name' => 'Pamekasan'),
            array('id' => '20', 'city_id' => '20', 'name' => 'Pasuruan'),
            array('id' => '21', 'city_id' => '21', 'name' => 'Pasuruan'),
            array('id' => '22', 'city_id' => '15', 'name' => 'Ponorogo'),
            array('id' => '23', 'city_id' => '13', 'name' => 'Ponorogo'),
            array('id' => '24', 'city_id' => '7', 'name' => 'Ponorogo'),
            array('id' => '25', 'city_id' => '35', 'name' => 'Ponorogo'),
            array('id' => '26', 'city_id' => '3', 'name' => 'Probolinggo'),
            array('id' => '27', 'city_id' => '36', 'name' => 'Probolinggo'),
            array('id' => '28', 'city_id' => '25', 'name' => 'Surabaya Utara'),
            array('id' => '29', 'city_id' => '25', 'name' => 'Surabaya Barat'),
            array('id' => '30', 'city_id' => '25', 'name' => 'Surabaya Timur'),
            array('id' => '31', 'city_id' => '25', 'name' => 'Surabaya Selatan'),
            array('id' => '32', 'city_id' => '26', 'name' => 'Surabaya Utara'),
            array('id' => '33', 'city_id' => '26', 'name' => 'Surabaya Barat'),
            array('id' => '34', 'city_id' => '26', 'name' => 'Surabaya Timur'),
            array('id' => '35', 'city_id' => '26', 'name' => 'Surabaya Selatan'),
            array('id' => '36', 'city_id' => '27', 'name' => 'Surabaya Utara'),
            array('id' => '37', 'city_id' => '27', 'name' => 'Surabaya Barat'),
            array('id' => '38', 'city_id' => '27', 'name' => 'Surabaya Timur'),
            array('id' => '39', 'city_id' => '27', 'name' => 'Surabaya Selatan'),
            array('id' => '40', 'city_id' => '6', 'name' => 'Surabaya Utara'),
            array('id' => '41', 'city_id' => '22', 'name' => 'Surabaya Selatan'),
            array('id' => '42', 'city_id' => '18', 'name' => 'Tulungagung'),
            array('id' => '43', 'city_id' => '33', 'name' => 'Tulungagung'),
            array('id' => '44', 'city_id' => '34', 'name' => 'Tulungagung'),
            array('id' => '45', 'city_id' => '19', 'name' => 'Pasuruan'),
        );
        DB::table('distrik_operations')->insert($do);
    }
}
