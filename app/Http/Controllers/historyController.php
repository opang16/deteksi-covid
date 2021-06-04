<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class historyController extends Controller
{
    protected function index()
    {
        if (auth()->check()) {
            $history = DB::table('history')
                ->join('hasil', 'hasil.id', 'history.id_hasil')
                ->where('history.id_user', auth()->user()->id)
                ->select('history.*', 'hasil.jawaban')->get();

            return view('history', compact('history'));
        }
        return redirect('/login');
    }
}
