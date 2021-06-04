<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Support\Facades\DB;

class hasilController extends Controller
{
    public function index()
    {
    }

    public function get($id)
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        $hasil = History::find($id);

        $hasil['text'] = DB::table('hasil')->find($hasil->id_hasil);
        return view('hasil', compact('pertanyaan', 'hasil'));
    }
}
