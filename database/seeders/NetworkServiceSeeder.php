<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NetworkServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('network_services')->delete();

        $ns = array(
            array('id' => '1', 'do_id' => '26', 'name' => 'Jember'),
            array('id' => '2', 'do_id' => '27', 'name' => 'Jember'),
            array('id' => '3', 'do_id' => '3', 'name' => 'Jember'),
            array('id' => '4', 'do_id' => '4', 'name' => 'Jember'),
            array('id' => '5', 'do_id' => '5', 'name' => 'Jember'),
            array('id' => '6', 'do_id' => '6', 'name' => 'Jember'),
            array('id' => '7', 'do_id' => '7', 'name' => 'Lamongan'),
            array('id' => '8', 'do_id' => '8', 'name' => 'Lamongan'),
            array('id' => '9', 'do_id' => '9', 'name' => 'Lamongan'),
            array('id' => '10', 'do_id' => '10', 'name' => 'Lamongan'),
            array('id' => '11', 'do_id' => '11', 'name' => 'Lamongan'),
            array('id' => '12', 'do_id' => '12', 'name' => 'Lamongan'),
            array('id' => '13', 'do_id' => '13', 'name' => 'Madiun'),
            array('id' => '14', 'do_id' => '14', 'name' => 'Madiun'),
            array('id' => '15', 'do_id' => '22', 'name' => 'Madiun'),
            array('id' => '16', 'do_id' => '23', 'name' => 'Madiun'),
            array('id' => '17', 'do_id' => '24', 'name' => 'Madiun'),
            array('id' => '18', 'do_id' => '25', 'name' => 'Madiun'),
            array('id' => '19', 'do_id' => '42', 'name' => 'Madiun'),
            array('id' => '20', 'do_id' => '43', 'name' => 'Madiun'),
            array('id' => '21', 'do_id' => '44', 'name' => 'Madiun'),
            array('id' => '22', 'do_id' => '15', 'name' => 'Malang'),
            array('id' => '23', 'do_id' => '16', 'name' => 'Malang'),
            array('id' => '24', 'do_id' => '17', 'name' => 'Malang'),
            array('id' => '25', 'do_id' => '20', 'name' => 'Malang'),
            array('id' => '26', 'do_id' => '21', 'name' => 'Malang'),
            array('id' => '27', 'do_id' => '45', 'name' => 'Malang'),
            array('id' => '28', 'do_id' => '28', 'name' => 'Surabaya Utara'),
            array('id' => '29', 'do_id' => '32', 'name' => 'Surabaya Utara'),
            array('id' => '30', 'do_id' => '36', 'name' => 'Surabaya Utara'),
            array('id' => '31', 'do_id' => '40', 'name' => 'Surabaya Utara'),
            array('id' => '32', 'do_id' => '1', 'name' => 'Surabaya Utara'),
            array('id' => '33', 'do_id' => '2', 'name' => 'Surabaya Utara'),
            array('id' => '34', 'do_id' => '18', 'name' => 'Surabaya Utara'),
            array('id' => '35', 'do_id' => '19', 'name' => 'Surabaya Utara'),
            array('id' => '36', 'do_id' => '30', 'name' => 'Surabaya Utara'),
            array('id' => '37', 'do_id' => '34', 'name' => 'Surabaya Utara'),
            array('id' => '38', 'do_id' => '38', 'name' => 'Surabaya Utara'),
            array('id' => '39', 'do_id' => '31', 'name' => 'Surabaya Selatan'),
            array('id' => '40', 'do_id' => '35', 'name' => 'Surabaya Selatan'),
            array('id' => '41', 'do_id' => '39', 'name' => 'Surabaya Selatan'),
            array('id' => '42', 'do_id' => '41', 'name' => 'Surabaya Selatan'),
            array('id' => '43', 'do_id' => '29', 'name' => 'Surabaya Selatan'),
            array('id' => '44', 'do_id' => '33', 'name' => 'Surabaya Selatan'),
            array('id' => '45', 'do_id' => '37', 'name' => 'Surabaya Selatan'),
        );
        DB::table('network_services')->insert($ns);
    }
}
