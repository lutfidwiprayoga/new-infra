<?php

use App\Http\Controllers\CloseB2SController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\FotogridController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PivotController;
use App\Http\Controllers\ReadNotifController;
use App\Http\Controllers\SitelistController;
use App\Http\Controllers\TargetBulanController;
use App\Http\Controllers\WinJavaController;
use App\Models\Branch;
use App\Models\City;
use App\Models\DistrikOperation;
use App\Models\InfraType;
use App\Models\NetworkService;
use App\Models\Progres_hq;
use App\Models\Progres_region;
use App\Models\Site_id;
use App\Models\Targetbulanberjalan;
use App\Models\TowerProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/coba', function () {
    return view('coba');
});

Route::get('/mapnewinfra', [MapController::class, 'index']);
Route::get('/mapnewinfra/json', [MapController::class, 'json']);
Route::post('/importexcel', [ExcelController::class, 'import'])->name('importexcel');
Route::get('/exportexcel', [ExcelController::class, 'export'])->name('exportexcel');
Route::resource('/sitelist', SitelistController::class);
Route::any('/filter/sitelist', [FilterController::class, 'data'])->name('filter.sitelist');
Route::get('/pivot', [PivotController::class, 'index'])->name('pivot.index');
Route::get('/winjava', [WinJavaController::class, 'index'])->name('winjava.index');

Route::prefix('alertcenter')->group(function () {
    Route::get('/close', [CloseB2SController::class, 'close'])->name('alertcenter.close');
    Route::get('/out', [CloseB2SController::class, 'out'])->name('alertcenter.out');
});

Route::get('/fotogrid/index', [FotogridController::class, 'index'])->name('fotogrid.index');
Route::post('/fotogrid/store', [FotogridController::class, 'store'])->name('fotogrid.store');

Route::prefix('targetbulan')->group(function () {
    Route::get('/oa', [TargetBulanController::class, 'targetOA'])->name('targetbulan.oa');
    Route::get('/rfi', [TargetBulanController::class, 'targetRFI'])->name('targetbulan.rfi');
});

Route::post('/readnotif/{id}', [ReadNotifController::class, 'markRead'])->name('notif.read');

Route::get('/progreshq/by_simple_id/{id}', function ($id) {
    $progresshq = Progres_hq::where('simple_progress_id', $id)->get();
    return response()->json([
        'data' => $progresshq
    ]);
});

Route::get('/progress_regional/by_progress_hq_id/{id}', function ($id) {
    $progress_regional = Progres_region::where('progress_hq_id', $id)->get();
    return response()->json([
        'data' => $progress_regional
    ]);
});
Route::get('/city', function (Request $request) {
    $cities = City::where('site_id', $request->site_id)->get();
    return response()->json($cities);
});
Route::get('/distrik', function (Request $request) {
    $distrik = DistrikOperation::where('city_id', $request->city_id)->get();
    return response()->json($distrik);
});
Route::get('/ns', function (Request $request) {
    $network = NetworkService::where('do_id', $request->do_id)->get();
    return response()->json($network);
});
Route::get('/branch', function (Request $request) {
    $branch = Branch::where('ns_id', $request->ns_id)->get();
    return response()->json($branch);
});
Route::get('/infratype', function (Request $request) {
    $infratype = InfraType::where('tp_id', $request->tp_id)->get();
    return response()->json($infratype);
});
Route::get('/progresshq', function (Request $request) {
    $progresshq = Progres_hq::where('simple_progress_id', $request->simple_progress_id)->get();
    return response()->json($progresshq);
});
Route::get('/progressregional', function (Request $request) {
    $progressregional = Progres_region::where('progress_hq_id', $request->progress_hq_id)->get();
    return response()->json($progressregional);
});
Route::get('/targetbulanberjalan', function (Request $request) {
    $targetbulanberjalan = Targetbulanberjalan::where('simple_progress_id', $request->simple_progress_id)->get();
    return response()->json($targetbulanberjalan);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
