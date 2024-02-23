<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Kariah;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $asnafs = User::role('Asnaf')->get();
        $amils = User::role('Amil')->get();
        $kariahs = Kariah::withCount(['asnafs'])->orderByDesc('asnafs_count')->get();

        return view('home')->with([
            'asnafs' => $asnafs,
            'amils' => $amils,
            'asnafCount' => $asnafs->count(),
            'kariahs' => $kariahs,
            'kariahCount' => $kariahs->count(),
        ]);
    }
}
