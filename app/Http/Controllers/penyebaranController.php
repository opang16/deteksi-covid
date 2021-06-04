<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penyebaran;

class penyebaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penyebaran = DB::table('penyebaran')->get();

        return view('index', compact('penyebaran'));
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
        //
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
    public function edit(Penyebaran $id)
    {
        //
        return view('editpenyebaran',  compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyebaran $id)
    {
        //

        $validated = $request->validate([
            'tanggal' => 'required',
            'positif' => 'required',
            'sembuh' => 'required',
            'meninggal' => 'required',
        ]);

        Penyebaran::where('id', $id->id)
            ->update([
                'tanggal' => $request->tanggal,
                'positif' => $request->positif,
                'sembuh' => $request->sembuh,
                'meninggal' => $request->meninggal
            ]);

        return redirect('/')->with('status', 'Data Penyebaran Berhasil Diubah');
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
