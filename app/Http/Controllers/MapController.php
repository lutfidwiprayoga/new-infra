<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\NewInfra;
use App\Models\Traffic;

class MapController extends Controller
{
    public function __construct()
    {
        $this->City = new City();
    }
    public function index()
    {
        //Jember
        $jember_oa = NewInfra::where('branch', 'Jember')->where('simple_progress', 'ON AIR')->count();
        $jember_rfi = NewInfra::where('branch', 'Jember')->where('simple_progress', 'RFI')->count();
        $jember_ny = NewInfra::where('branch', 'Jember')->where('simple_progress', 'NY RFI')->count();
        $jember_drop = NewInfra::where('branch', 'Jember')->where('simple_progress', 'DROP/HOLD')->count();
        $jember_grand = NewInfra::where('branch', 'Jember')->whereIN('simple_progress', ['ON AIR', 'RFI', 'NY RFI', 'DROP/HOLD'])->count();
        $jember_oa_ach = round($jember_oa / $jember_grand * 100, 1);
        // Lamongan
        $lamongan_oa = NewInfra::where('branch', 'Lamongan')->where('simple_progress', 'ON AIR')->count();
        $lamongan_rfi = NewInfra::where('branch', 'Lamongan')->where('simple_progress', 'RFI')->count();
        $lamongan_ny = NewInfra::where('branch', 'Lamongan')->where('simple_progress', 'NY RFI')->count();
        $lamongan_drop = NewInfra::where('branch', 'Lamongan')->where('simple_progress', 'DROP/HOLD')->count();
        $lamongan_grand = NewInfra::where('branch', 'Lamongan')->whereIN('simple_progress', ['ON AIR', 'RFI', 'NY RFI', 'DROP/HOLD'])->count();
        $lamongan_oa_ach = round($lamongan_oa / $lamongan_grand * 100, 1);
        //Madiun
        $madiun_oa = NewInfra::where('branch', 'madiun')->where('simple_progress', 'ON AIR')->count();
        $madiun_rfi = NewInfra::where('branch', 'madiun')->where('simple_progress', 'RFI')->count();
        $madiun_ny = NewInfra::where('branch', 'madiun')->where('simple_progress', 'NY RFI')->count();
        $madiun_drop = NewInfra::where('branch', 'madiun')->where('simple_progress', 'DROP/HOLD')->count();
        $madiun_grand = NewInfra::where('branch', 'madiun')->whereIN('simple_progress', ['ON AIR', 'RFI', 'NY RFI', 'DROP/HOLD'])->count();
        $madiun_oa_ach = round($madiun_oa / $madiun_grand * 100, 1);
        //Malang
        $malang_oa = NewInfra::where('branch', 'malang')->where('simple_progress', 'ON AIR')->count();
        $malang_rfi = NewInfra::where('branch', 'malang')->where('simple_progress', 'RFI')->count();
        $malang_ny = NewInfra::where('branch', 'malang')->where('simple_progress', 'NY RFI')->count();
        $malang_drop = NewInfra::where('branch', 'malang')->where('simple_progress', 'DROP/HOLD')->count();
        $malang_grand = NewInfra::where('branch', 'malang')->whereIN('simple_progress', ['ON AIR', 'RFI', 'NY RFI', 'DROP/HOLD'])->count();
        $malang_oa_ach = round($malang_oa / $malang_grand * 100, 1);
        //Sidoarjo
        $sidoarjo_oa = NewInfra::where('branch', 'sidoarjo')->where('simple_progress', 'ON AIR')->count();
        $sidoarjo_rfi = NewInfra::where('branch', 'sidoarjo')->where('simple_progress', 'RFI')->count();
        $sidoarjo_ny = NewInfra::where('branch', 'sidoarjo')->where('simple_progress', 'NY RFI')->count();
        $sidoarjo_drop = NewInfra::where('branch', 'sidoarjo')->where('simple_progress', 'DROP/HOLD')->count();
        $sidoarjo_grand = NewInfra::where('branch', 'sidoarjo')->whereIN('simple_progress', ['ON AIR', 'RFI', 'NY RFI', 'DROP/HOLD'])->count();
        $sidoarjo_oa_ach = round($sidoarjo_oa / $sidoarjo_grand * 100, 1);
        //Surabaya
        $surabaya_oa = NewInfra::where('branch', 'surabaya')->where('simple_progress', 'ON AIR')->count();
        $surabaya_rfi = NewInfra::where('branch', 'surabaya')->where('simple_progress', 'RFI')->count();
        $surabaya_ny = NewInfra::where('branch', 'surabaya')->where('simple_progress', 'NY RFI')->count();
        $surabaya_drop = NewInfra::where('branch', 'surabaya')->where('simple_progress', 'DROP/HOLD')->count();
        $surabaya_grand = NewInfra::where('branch', 'surabaya')->whereIN('simple_progress', ['ON AIR', 'RFI', 'NY RFI', 'DROP/HOLD'])->count();
        $surabaya_oa_ach = round($surabaya_oa / $surabaya_grand * 100, 1);
        //Grand Total
        $grandtotal_oa = $jember_oa + $lamongan_oa + $madiun_oa + $malang_oa + $sidoarjo_oa + $surabaya_oa;
        $grandtotal_rfi = $jember_rfi + $lamongan_rfi + $madiun_rfi + $malang_rfi + $sidoarjo_rfi + $surabaya_rfi;
        $grandtotal_ny = $jember_ny + $lamongan_ny + $madiun_ny + $malang_ny + $sidoarjo_ny + $surabaya_ny;
        $grandtotal_drop = $jember_drop + $lamongan_drop + $madiun_drop + $malang_drop + $sidoarjo_drop + $surabaya_drop;
        $grandtotal_grand = $jember_grand + $lamongan_grand + $madiun_grand + $malang_grand + $sidoarjo_grand + $surabaya_grand;
        //Percentage ACH
        $jember_ach = round($jember_grand / $grandtotal_grand * 100, 1);
        $lamongan_ach = round($lamongan_grand / $grandtotal_grand * 100, 1);
        $madiun_ach = round($madiun_grand / $grandtotal_grand * 100, 1);
        $malang_ach = round($malang_grand / $grandtotal_grand * 100, 1);
        $sidoarjo_ach = round($sidoarjo_grand / $grandtotal_grand * 100, 1);
        $surabaya_ach = round($surabaya_grand / $grandtotal_grand * 100, 1);
        $total_ach = round($jember_ach + $lamongan_ach + $madiun_ach + $malang_ach + $sidoarjo_ach + $surabaya_ach);
        return view('home', compact(
            'jember_oa_ach',
            'lamongan_oa_ach',
            'madiun_oa_ach',
            'malang_oa_ach',
            'sidoarjo_oa_ach',
            'surabaya_oa_ach',
            'total_ach',
            'jember_oa',
            'jember_rfi',
            'jember_ny',
            'jember_drop',
            'jember_grand',
            'lamongan_oa',
            'lamongan_rfi',
            'lamongan_ny',
            'lamongan_drop',
            'lamongan_grand',
            'madiun_oa',
            'madiun_rfi',
            'madiun_ny',
            'madiun_drop',
            'madiun_grand',
            'malang_oa',
            'malang_rfi',
            'malang_ny',
            'malang_drop',
            'malang_grand',
            'sidoarjo_oa',
            'sidoarjo_rfi',
            'sidoarjo_ny',
            'sidoarjo_drop',
            'sidoarjo_grand',
            'surabaya_oa',
            'surabaya_rfi',
            'surabaya_ny',
            'surabaya_drop',
            'surabaya_grand',
            'grandtotal_oa',
            'grandtotal_rfi',
            'grandtotal_ny',
            'grandtotal_drop',
            'grandtotal_grand',
            'jember_ach',
            'madiun_ach',
            'lamongan_ach',
            'malang_ach',
            'sidoarjo_ach',
            'surabaya_ach',
        ));
    }

    public function json()
    {
        $result = $this->City->allData();
        return json_encode($result);
    }
}
