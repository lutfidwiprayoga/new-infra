<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $city = array(
            array('id' => '1', 'site_id' => '4', 'city_id' => '1', 'name' => 'Banyuwangi', 'longitude' => '114.3711', 'latitude' => '-8.2095'),
            array('id' => '2', 'site_id' => '6', 'city_id' => '2', 'name' => 'Jember', 'longitude' => '113.7025', 'latitude' => '-8.1711'),
            array('id' => '3', 'site_id' => '10', 'city_id' => '3', 'name' => 'Lumajang', 'longitude' => '113.2213', 'latitude' => '-8.1367'),
            array('id' => '4',  'site_id' => '20', 'city_id' => '4', 'name' => 'Situbondo', 'longitude' => '114.0046', 'latitude' => '-7.7069'),
            array('id' => '5', 'site_id' => '3', 'city_id' => '5', 'name' => 'Bojonegoro', 'longitude' => '111.8752', 'latitude' => '-7.1557'),
            array('id' => '6', 'site_id' => '5', 'city_id' => '6', 'name' => 'Gresik', 'longitude' => '112.6566', 'latitude' => '-7.1649'),
            array('id' => '7',  'site_id' => '15', 'city_id' => '7', 'name' => 'Ngawi', 'longitude' => '111.4457', 'latitude' => '-7.4067'),
            array('id' => '8', 'site_id' => '2', 'city_id' => '8', 'name' => 'Bondowoso', 'longitude' => '113.8218', 'latitude' => '-7.9147'),
            array('id' => '9', 'site_id' => '7', 'city_id' => '9', 'name' => 'Jombang', 'longitude' => '112.2379', 'latitude' => '-7.5395'),
            array('id' => '10', 'site_id' => '8', 'city_id' => '10', 'name' => 'Kediri', 'longitude' => '112.0070', 'latitude' => '-7.8136'),
            array('id' => '11', 'site_id' => '16', 'city_id' => '11', 'name' => 'Kediri', 'longitude' => '112.0070', 'latitude' => '-7.8136'),
            array('id' => '12',  'site_id' => '11', 'city_id' => '12', 'name' => 'Madiun', 'longitude' => '111.5253', 'latitude' => '-7.6317'),
            array('id' => '13',  'site_id' => '12', 'city_id' => '13', 'name' => 'Magetan', 'longitude' => '111.3320', 'latitude' => '-7.6562'),
            array('id' => '14',  'site_id' => '14', 'city_id' => '14', 'name' => 'Nganjuk', 'longitude' => '111.9033', 'latitude' => '-7.6076'),
            array('id' => '15',  'site_id' => '17', 'city_id' => '15', 'name' => 'Ponorogo', 'longitude' => '111.4618', 'latitude' => '-7.8729'),
            array('id' => '16', 'site_id' => '9', 'city_id' => '16', 'name' => 'Malang', 'longitude' => '112.6365', 'latitude' => '-7.9793'),
            array('id' => '17', 'site_id' => '29', 'city_id' => '17', 'name' => 'Malang', 'longitude' => '112.6365', 'latitude' => '-7.9793'),
            array('id' => '18',  'site_id' => '24', 'city_id' => '18', 'name' => 'Tulungagung', 'longitude' => '111.8994', 'latitude' => '-8.0662'),
            array('id' => '19',  'site_id' => '13', 'city_id' => '19', 'name' => 'Mojokerto', 'longitude' => '112.4319', 'latitude' => '-7.4638'),
            array('id' => '20',  'site_id' => '18', 'city_id' => '20', 'name' => 'Pasuruan', 'longitude' => '112.9094', 'latitude' => '-7.6428'),
            array('id' => '21',  'site_id' => '37', 'city_id' => '21', 'name' => 'Pasuruan', 'longitude' => '112.9094', 'latitude' => '-7.6428'),
            array('id' => '22',  'site_id' => '19', 'city_id' => '22', 'name' => 'Sidoarjo', 'longitude' => '112.7190', 'latitude' => '-7.4469'),
            array('id' => '23',  'site_id' => '21', 'city_id' => '23', 'name' => 'Sumenep', 'longitude' => '113.8651', 'latitude' => '-7.0150'),
            array('id' => '24',  'site_id' => '22', 'city_id' => '24', 'name' => 'Sampang', 'longitude' => '113.2498', 'latitude' => '-7.2058'),
            array('id' => '25',  'site_id' => '25', 'city_id' => '25', 'name' => 'Surabaya', 'longitude' => '112.7506', 'latitude' => '-7.2515'),
            array('id' => '26',  'site_id' => '26', 'city_id' => '26', 'name' => 'Surabaya', 'longitude' => '112.7506', 'latitude' => '-7.2515'),
            array('id' => '27',  'site_id' => '23', 'city_id' => '27', 'name' => 'Surabaya', 'longitude' => '112.7506', 'latitude' => '-7.2515'),
            array('id' => '28',  'site_id' => '27', 'city_id' => '28', 'name' => 'Bangkalan', 'longitude' => '112.7348', 'latitude' => '-7.0409'),
            array('id' => '29',  'site_id' => '31', 'city_id' => '29', 'name' => 'Lamongan', 'longitude' => '112.4155', 'latitude' => '-7.1241'),
            array('id' => '30',  'site_id' => '32', 'city_id' => '30', 'name' => 'Tuban', 'longitude' => '112.0667', 'latitude' => '-6.9019'),
            array('id' => '31',  'site_id' => '30', 'city_id' => '31', 'name' => 'Batu', 'longitude' => '112.5268', 'latitude' => '-7.8721'),
            array('id' => '32',  'site_id' => '28', 'city_id' => '32', 'name' => 'Pamekasan', 'longitude' => '113.4901', 'latitude' => '-7.1649'),
            array('id' => '33',  'site_id' => '34', 'city_id' => '33', 'name' => 'Trenggalek', 'longitude' => '111.7076', 'latitude' => '-8.0524'),
            array('id' => '34',  'site_id' => '35', 'city_id' => '34', 'name' => 'Blitar', 'longitude' => '112.1661', 'latitude' => '-8.0990'),
            array('id' => '35',  'site_id' => '36', 'city_id' => '35', 'name' => 'Pacitan', 'longitude' => '111.1058', 'latitude' => '-8.1976'),
            array('id' => '36',  'site_id' => '33', 'city_id' => '36', 'name' => 'Probolinggo', 'longitude' => '113.2172', 'latitude' => '-7.7467'),
        );
        DB::table('cities')->insert($city);
    }
}
