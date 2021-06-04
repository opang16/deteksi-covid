<?php

namespace App\Http\Controllers;

use App\Models\Wismaatlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class wismaAtletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisma_atlet = DB::table('wisma_atlet')->get();

        return view('wismaAtlet', ['wisma_atlet' => $wisma_atlet]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambahwismaatlet');
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
        $validated = $request->validate([
            'name' => 'required',
            'alamat' => 'required',

        ]);


        $tambahwisma_atlet = new Wismaatlet;
        $tambahwisma_atlet->name = $request->name;
        $tambahwisma_atlet->alamat = $request->alamat;
        $tambahwisma_atlet->no_telepon = $request->no_telepon;
        $tambahwisma_atlet->email = $request->email;

        $tambahwisma_atlet->save();


        return redirect('/wisma-atlet')->with('status', 'Data Wisma Atlet Berhasil Ditambahkan');
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
    public function edit(Wismaatlet $id)
    {
        //
        return view('editwismaatlet',  compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wismaatlet $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'alamat' => 'required',

        ]);
        Wismaatlet::where('id', $id->id)
            ->update([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'email' => $request->email
            ]);

        return redirect('/wisma-atlet')->with('status', 'Data Wisma Atlet Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wismaatlet $id)
    {
        //
        Wismaatlet::destroy($id->id);
        return redirect('/wisma-atlet')->with('delete', 'Data Wisma Atlet Berhasil Dihapus');
    }
}
