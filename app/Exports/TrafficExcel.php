<?php

namespace App\Exports;

use App\Models\Traffic;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class TrafficExcel implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('Excel.index', [
            'traffic' => Traffic::get()
        ]);
    }
}
