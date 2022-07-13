<?php

namespace App\Http\Controllers;

use App\Models\Fotogrid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FotogridController extends Controller
{
    public function index()
    {
        $fotogrid = Fotogrid::get();
        return view('Fotogrid.index', compact('fotogrid'));
    }

    public function store(Request $request)
    {
        // $fotogrid = Fotogrid::find($request->input('id'));
        // if ($request->hasFile('foto')) {
        //     $request->file('foto')->move('fotogrid/January/', $request->file('foto')->getClientOriginalName());
        //     $fotogrid->foto = $request->file('foto')->getClientOriginalName();
        //     $fotogrid->save();
        // }

        $id = $request->input('id');
        $file = $request->file('foto');
        $namafile = $file->getClientOriginalName();
        $file->move('fotogrid/January/', $file->getClientOriginalName());
        Fotogrid::create([
            'id' => $id,
            'foto' => $namafile,
        ]);
        return Redirect()->back();
    }
}
