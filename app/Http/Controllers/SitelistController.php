<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\City;
use App\Models\DistrikOperation;
use App\Models\Fotogrid;
use App\Models\InfraType;
use App\Models\NetworkService;
use App\Models\NewInfra;
use App\Models\Notifikasi;
use App\Models\Progres_hq;
use App\Models\Simple_progres;
use App\Models\Site_id;
use App\Models\TowerProvider;
use App\Models\Traffic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SitelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $traffic = Traffic::latest()->get();
        $traffic = NewInfra::latest()->get();
        $siteid = Site_id::get();
        $branch = Branch::get();
        $towerprovider = TowerProvider::get();
        $networkservice = NetworkService::get();
        $distrik = DistrikOperation::get();
        $simpleprogress = Simple_progres::get();
        $progresshq = Progres_hq::get();
        $city = City::get();
        $site_id_plan_indeks = $request->input('site_id_plan_indeks');
        $site_id_plan_number = $request->input('site_id_plan_number');
        // dd(strtotime('2022-06-26'));
        return view('Sitelist.index', compact(
            'traffic',
            'city',
            'distrik',
            'siteid',
            'branch',
            'networkservice',
            'towerprovider',
            'simpleprogress',
            'progresshq',
            'site_id_plan_indeks',
            'site_id_plan_number'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'batch' => 'required|not_in:null',
            'program_hq' => 'required|not_in:null',
            'site_id_plan_indeks' => 'required|not_in:null',
            'site_id_plan_number' => 'required|max:3',
            'site_name_plan' => 'required|alpha_dash',
            'site_id_actual_indeks' => 'required|not_in:null',
            'site_id_actual_number' => 'required|max:3',
            'site_name_actual' => 'required|alpha_dash',
            'branch' => 'required|not_in:null',
            'city' => 'required|not_in:null',
            'ns' => 'required|not_in:null',
            'do' => 'required|not_in:null',
            'infra_type' => 'required|not_in:null',
            'tower_provider' => 'required|not_in:null',
            'simple_progress' => 'required|not_in:null',
            'progress_hq' => 'required|not_in:null',
            'progress_regional' => 'required|not_in:null',
            'kkst_date' => 'required',
            'trm_type' => 'required|not_in:null',
            'capex_eqp' => 'required|not_in:null',
            'capex_trm' => 'required|not_in:null',
        ]);
        $site_id_plan_indeks = $request->input('site_id_plan_indeks');
        $site_id_plan_number = $request->input('site_id_plan_number');
        $site_id_plan = "$site_id_plan_indeks$site_id_plan_number";
        $site_id_actual_indeks = $request->input('site_id_actual_indeks');
        $site_id_actual_number = $request->input('site_id_actual_number');
        $site_id_actual = "$site_id_actual_indeks$site_id_actual_number";
        $traffic = new NewInfra();
        $traffic->batch = $request->batch;
        $traffic->program_hq = $request->program_hq;
        $traffic->site_id_plan = $site_id_plan;
        $traffic->site_name_plan = $request->site_name_plan;
        $traffic->site_id_actual = $site_id_actual;
        $traffic->site_name_actual = $request->site_name_actual;
        $traffic->longitude = $request->longitude;
        $traffic->lotitude = $request->lotitude;
        $traffic->alamat_site = $request->alamat_site;
        $traffic->branch = $request->branch;
        $traffic->city = $request->city;
        $traffic->ns = $request->ns;
        $traffic->do = $request->do;
        $traffic->infra_type = $request->infra_type;
        $traffic->tower_provider = $request->tower_provider;
        $traffic->simple_progress = $request->simple_progress;
        $traffic->progress_hq = $request->progress_hq;
        $traffic->progress_regional = $request->progress_regional;
        $traffic->target_bulan_berjalan = $request->target_bulan_berjalan;
        $traffic->kkst_date = Carbon::parse($request->kkst_date)->format('d-m-Y');
        if ($traffic->infra_type == 'B2S') {
            $traffic->sla_rfc_b2s = Carbon::parse($traffic->kkst_date)->addDay(60)->format('d-m-Y');
            $traffic->sla_rfi = Carbon::parse($traffic->kkst_date)->addDay(120)->format('d-m-Y');
        } elseif ($traffic->infra_type == 'Mini Macro') {
            $traffic->sla_rfc_b2s = Carbon::parse($traffic->kkst_date)->addDay(45)->format('d-m-Y');
            $traffic->sla_rfi = Carbon::parse($traffic->kkst_date)->addDay(90)->format('d-m-Y');
        } elseif ($traffic->infra_type == 'Collo TP') {
            $traffic->sla_rfi = Carbon::parse($traffic->kkst_date)->addDay(40)->format('d-m-Y');
        }
        $traffic->drm_date = $request->drm_date;
        $traffic->rfi_date = $request->rfi_date;
        $traffic->oa_date = $request->oa_date;
        if ($traffic->simple_progress == 'RFI') {
            $traffic->target_rfi_date = 'DONE';
            $traffic->target_rfi_week = 'DONE';
        } elseif ($traffic->simple_progress == 'ON AIR') {
            $traffic->target_rfi_date = 'DONE';
            $traffic->target_rfi_week = 'DONE';
            $traffic->target_oa_date = 'DONE';
            $traffic->target_oa_week = 'DONE';
        } elseif ($traffic->simple_progress == 'DROP/HOLD') {
            $traffic->target_rfi_date = 'DROP';
            $traffic->target_rfi_week = 'DROP';
            $traffic->target_oa_date = 'DROP';
            $traffic->target_oa_week = 'DROP';
        } else {
            $traffic->target_rfi_date = null;
            $traffic->target_rfi_week = null;
            $traffic->target_oa_date = null;
            $traffic->target_oa_week = null;
        }
        $traffic->month_oa = $request->month_oa;
        $traffic->trm_type = $request->trm_type;
        $traffic->capex_eqp = $request->capex_eqp;
        $traffic->capex_trm = $request->capex_trm;
        $traffic->antena_height = $request->antena_height;
        $traffic->remarks = $request->remarks;
        $traffic->save();

        // dd($notifikasi);
        Alert::success('Success Add Data');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $traffic = NewInfra::find($id);
        $simpleprogress = Simple_progres::get();
        return view('Sitelist.edit', compact('traffic', 'simpleprogress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $traffic = NewInfra::find($id);
        $this->validate($request, [
            'simple_progress' => 'required|not_in:null',
            'progress_hq' => 'required|not_in:null',
            'progress_regional' => 'required|not_in:null',
        ]);
        // $file = Request()->foto;
        // $filename = $traffic->site_id_actual . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('fotogrid'), $filename);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotogrid/', $request->file('foto')->getClientOriginalName());
            $traffic->foto = $request->file('foto')->getClientOriginalName();
            $traffic->save();
        }
        $traffic->longitude = $request->longitude;
        $traffic->lotitude = $request->lotitude;
        $traffic->alamat_site = $request->alamat_site;
        $traffic->simple_progress = $request->simple_progress;
        $traffic->progress_hq = $request->progress_hq;
        $traffic->progress_regional = $request->progress_regional;
        $traffic->target_bulan_berjalan = $request->target_bulan_berjalan;
        $traffic->issue = $request->issue;
        if ($traffic->simple_progress == 'RFI') {
            $traffic->target_rfi_date = 'DONE';
            $traffic->rfi_date = Carbon::parse($request->rfi_date)->format('d-m-Y');
            $traffic->target_oa_date = Carbon::parse($request->rfi_date)->format('d-m-Y');
        } elseif ($traffic->simple_progress == 'ON AIR') {
            $traffic->target_rfi_date = 'DONE';
            $traffic->target_oa_date = 'DONE';
            $traffic->rfi_date = Carbon::parse($request->rfi_date)->format('d-m-Y');
            $traffic->oa_date = Carbon::parse($request->oa_date)->format('d-m-Y');
        } elseif ($traffic->simple_progress == 'DROP/HOLD') {
            $traffic->target_rfi_date = 'DROP';
            $traffic->target_oa_date = 'DROP';
            $traffic->rfi_date = 'DROP';
            $traffic->oa_date = 'DROP';
        } else {
            $traffic->target_rfi_date = Carbon::parse($request->target_rfi_date)->format('d-m-Y');
            $traffic->rfi_date = $request->rfi_date;
            $traffic->oa_date = $request->oa_date;
            $traffic->target_oa_date = Carbon::parse($request->rfi_date)->format('d-m-Y');
        }
        if ($traffic->target_rfi_date == 'DONE') {
            $traffic->target_rfi_week = 'DONE';
        } elseif ($traffic->target_rfi_date == 'DROP') {
            $traffic->target_rfi_week = 'DROP';
        } else {
            $traffic->target_rfi_week = Carbon::parse($traffic->target_rfi_date)->weekOfYear;;
        }
        if ($traffic->infra_type == 'B2S') {
            $traffic->sla_rfc_b2s = Carbon::parse($traffic->sla_rfc_b2s)->format('d-m-Y');
            $traffic->sla_rfi = Carbon::parse($traffic->sla_rfi)->format('d-m-Y');
        } elseif ($traffic->infra_type == 'Mini Macro') {
            $traffic->sla_rfc_b2s = Carbon::parse($traffic->sla_rfc_b2s)->format('d-m-Y');
            $traffic->sla_rfi = Carbon::parse($traffic->sla_rfi)->format('d-m-Y');
        } elseif ($traffic->infra_type == 'Collo TP') {
            $traffic->sla_rfi = Carbon::parse($traffic->sla_rfi)->format('d-m-Y');
        } else {
            $traffic->sla_rfc_b2s = $traffic->sla_rfc_b2s;
            $traffic->sla_rfi = $traffic->sla_rfi;
        }
        if ($traffic->drm_date  == '0') {
            $traffic->drm_date = null;
        } else {
            $traffic->drm_date = Carbon::parse($traffic->drm_date)->format('d-m-Y');
        }
        if ($traffic->target_oa_date == 'DONE') {
            $traffic->target_oa_week = 'DONE';
        } elseif ($traffic->target_oa_date == 'DROP') {
            $traffic->target_oa_week = 'DROP';
        } else {
            $traffic->target_oa_week = Carbon::parse($traffic->target_oa_date)->weekOfYear;
        }
        $traffic->month_oa = $request->month_oa;
        $traffic->trm_type = $request->trm_type;
        $traffic->capex_eqp = $request->capex_eqp;
        $traffic->capex_trm = $request->capex_trm;
        $traffic->antena_height = $request->antena_height;
        $traffic->remarks = $request->remarks;
        // $traffic->foto = $filename;
        $traffic->save();

        $notifikasi = new Notifikasi();
        $notifikasi->traffic_id = $traffic->id;
        $notifikasi->user_id = Auth::user()->id;
        $notifikasi->save();
        // dd($notifikasi);
        Alert::success('Success Update Data');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $traffic = NewInfra::findOrFail($id);
        $notif = Notifikasi::where('traffic_id', $traffic->id)->first();
        $traffic->delete();
        $notif->delete();
        if ($traffic) {
            Alert::success('Success Delete Data');
            return redirect()->route('sitelist.index');
        } else {
            return redirect()->route('sitelist.index');
        }
    }
}
