<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->delete();

        $branch = array(
            array('id' => '1', 'ns_id' => '1', 'name' => 'Jember'),
            array('id' => '2', 'ns_id' => '2', 'name' => 'Jember'),
            array('id' => '3', 'ns_id' => '3', 'name' => 'Jember'),
            array('id' => '4', 'ns_id' => '4', 'name' => 'Jember'),
            array('id' => '5', 'ns_id' => '5', 'name' => 'Jember'),
            array('id' => '6', 'ns_id' => '6', 'name' => 'Jember'),
            array('id' => '7', 'ns_id' => '31', 'name' => 'Lamongan'),
            array('id' => '8', 'ns_id' => '11', 'name' => 'Lamongan'),
            array('id' => '9', 'ns_id' => '12', 'name' => 'Lamongan'),
            array('id' => '10', 'ns_id' => '14', 'name' => 'Lamongan'),
            array('id' => '11', 'ns_id' => '17', 'name' => 'Lamongan'),
            array('id' => '12', 'ns_id' => '7', 'name' => 'Madiun'),
            array('id' => '13', 'ns_id' => '8', 'name' => 'Madiun'),
            array('id' => '14', 'ns_id' => '9', 'name' => 'Madiun'),
            array('id' => '15', 'ns_id' => '10', 'name' => 'Madiun'),
            array('id' => '16', 'ns_id' => '16', 'name' => 'Madiun'),
            array('id' => '17', 'ns_id' => '13', 'name' => 'Madiun'),
            array('id' => '18', 'ns_id' => '18', 'name' => 'Madiun'),
            array('id' => '19', 'ns_id' => '15', 'name' => 'Madiun'),
            array('id' => '20', 'ns_id' => '22', 'name' => 'Malang'),
            array('id' => '21', 'ns_id' => '23', 'name' => 'Malang'),
            array('id' => '22', 'ns_id' => '24', 'name' => 'Malang'),
            array('id' => '23', 'ns_id' => '19', 'name' => 'Malang'),
            array('id' => '24', 'ns_id' => '20', 'name' => 'Malang'),
            array('id' => '25', 'ns_id' => '21', 'name' => 'Malang'),
            array('id' => '26', 'ns_id' => '42', 'name' => 'Sidoarjo'),
            array('id' => '27', 'ns_id' => '25', 'name' => 'Sidoarjo'),
            array('id' => '28', 'ns_id' => '26', 'name' => 'Sidoarjo'),
            array('id' => '29', 'ns_id' => '27', 'name' => 'Sidoarjo'),
            array('id' => '30', 'ns_id' => '28', 'name' => 'Surabaya'),
            array('id' => '31', 'ns_id' => '29', 'name' => 'Surabaya'),
            array('id' => '32', 'ns_id' => '30', 'name' => 'Surabaya'),
            array('id' => '33', 'ns_id' => '32', 'name' => 'Surabaya'),
            array('id' => '34', 'ns_id' => '33', 'name' => 'Surabaya'),
            array('id' => '35', 'ns_id' => '34', 'name' => 'Surabaya'),
            array('id' => '36', 'ns_id' => '35', 'name' => 'Surabaya'),
            array('id' => '37', 'ns_id' => '36', 'name' => 'Surabaya'),
            array('id' => '38', 'ns_id' => '37', 'name' => 'Surabaya'),
            array('id' => '39', 'ns_id' => '38', 'name' => 'Surabaya'),
            array('id' => '40', 'ns_id' => '39', 'name' => 'Surabaya'),
            array('id' => '41', 'ns_id' => '40', 'name' => 'Surabaya'),
            array('id' => '42', 'ns_id' => '41', 'name' => 'Surabaya'),
            array('id' => '43', 'ns_id' => '43', 'name' => 'Surabaya'),
            array('id' => '44', 'ns_id' => '44', 'name' => 'Surabaya'),
            array('id' => '45', 'ns_id' => '45', 'name' => 'Surabaya'),
        );
        DB::table('branches')->insert($branch);
    }
}
