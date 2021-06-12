<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\History;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;

class pertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()) {


            $pertanyaan = DB::table('pertanyaan')->get();

            return view('tesCovid', compact('pertanyaan'));
        }
        return redirect('/login');
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
        $jawaban = [];
        if ($request->s1 == 1 && $request->s2 == 1 && $request->s3 == 1 && $request->s4 == 1 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 1;
        } elseif ($request->s1 == 0 && $request->s2 == 1 && $request->s3 == 1 && $request->s4 == 1 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 2;
        } elseif ($request->s1 == 0 && $request->s2 == 0 && $request->s3 == 1 && $request->s4 == 1 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 3;
        } elseif ($request->s1 == 0 && $request->s2 == 0 && $request->s3 == 0 && $request->s4 == 1 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 4;
        } elseif ($request->s1 == 0 && $request->s2 == 0 && $request->s3 == 0 && $request->s4 == 0 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 5;
        } elseif ($request->s1 == 0 && $request->s2 == 0 && $request->s3 == 0 && $request->s4 == 0 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 6;
        } elseif ($request->s1 == 1 && $request->s2 == 0 && $request->s3 == 0 && $request->s4 == 0 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 7;
        } elseif ($request->s1 == 1 && $request->s2 == 1 && $request->s3 == 0 && $request->s4 == 0 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 8;
        } elseif ($request->s1 == 1 && $request->s2 == 1 && $request->s3 == 1 && $request->s4 == 0 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 9;
        } elseif ($request->s1 == 1 && $request->s2 == 1 && $request->s3 == 1 && $request->s4 == 1 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 10;
        } elseif ($request->s1 == 1 && $request->s2 == 0 && $request->s3 == 1 && $request->s4 == 1 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 11;
        } elseif ($request->s1 == 1 && $request->s2 == 0 && $request->s3 == 0 && $request->s4 == 1 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 12;
        } elseif ($request->s1 == 1 && $request->s2 == 0 && $request->s3 == 0 && $request->s4 == 0 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 13;
        } elseif ($request->s1 == 0 && $request->s2 == 1 && $request->s3 == 0 && $request->s4 == 0 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 14;
        } elseif ($request->s1 == 0 && $request->s2 == 1 && $request->s3 == 1 && $request->s4 == 0 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 15;
        } elseif ($request->s1 == 0 && $request->s2 == 1 && $request->s3 == 1 && $request->s4 == 1 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 16;
        } elseif ($request->s1 == 1 && $request->s2 == 0 && $request->s3 == 1 && $request->s4 == 0 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 17;
        } elseif ($request->s1 == 1 && $request->s2 == 1 && $request->s3 == 0 && $request->s4 == 1 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 18;
        } elseif ($request->s1 == 1 && $request->s2 == 1 && $request->s3 == 1 && $request->s4 == 0 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 19;
        } elseif ($request->s1 == 0 && $request->s2 == 0 && $request->s3 == 1 && $request->s4 == 0 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 20;
        } elseif ($request->s1 == 0 && $request->s2 == 0 && $request->s3 == 0 && $request->s4 == 1 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 21;
        } elseif ($request->s1 == 0 && $request->s2 == 1 && $request->s3 == 0 && $request->s4 == 1 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 22;
        } elseif ($request->s1 == 1 && $request->s2 == 0 && $request->s3 == 1 && $request->s4 == 1 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 23;
        } elseif ($request->s1 == 0 && $request->s2 == 1 && $request->s3 == 0 && $request->s4 == 0 && $request->s5 == 1) {
            $jawaban['id_hasil'] = 24;
        } elseif ($request->s1 == 1 && $request->s2 == 1 && $request->s3 == 0 && $request->s4 == 1 && $request->s5 == 0) {
            $jawaban['id_hasil'] = 25;
        }

        $jawaban['s1'] = $request->s1;
        $jawaban['s2'] = $request->s2;
        $jawaban['s3'] = $request->s3;
        $jawaban['s4'] = $request->s4;
        $jawaban['s5'] = $request->s5;
        $jawaban['id_user'] = Auth::user()->id;
        $jawaban['waktu_tes'] = new DateTime();
        $hasil = History::create($jawaban);

        $pertanyaan = DB::table('pertanyaan')->get();
        $hasil['text'] = DB::table('hasil')->find($hasil->id_hasil);

        return view('hasil', compact('pertanyaan', 'hasil'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
