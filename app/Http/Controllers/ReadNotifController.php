<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;

class ReadNotifController extends Controller
{
    public function markRead($id)
    {
        $notif = Notifikasi::find($id);
        $notif->read = true;
        $notif->save();
        return redirect()->back();
    }
}
