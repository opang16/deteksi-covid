<?php

namespace App\Http\Controllers;

use App\Models\Puskesmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class puskesmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puskesmas = DB::table('puskesmas')->get();

        return view('puskesmas', ['puskesmas' => $puskesmas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambahpuskesmas');
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


        $tambahpuskesmas = new Puskesmas;
        $tambahpuskesmas->name = $request->name;
        $tambahpuskesmas->alamat = $request->alamat;
        $tambahpuskesmas->no_telepon = $request->no_telepon;
        $tambahpuskesmas->email = $request->email;

        $tambahpuskesmas->save();


        return redirect('/puskesmas')->with('status', 'Data Puskesmas Berhasil Ditambahkan');
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
    public function edit(Puskesmas $id)
    {
        //
        return view('editpuskesmas',  compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puskesmas $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'alamat' => 'required',

        ]);
        Puskesmas::where('id', $id->id)
            ->update([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'email' => $request->email
            ]);

        return redirect('/puskesmas')->with('status', 'Data Puskesmas Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puskesmas $id)
    {
        //

        Puskesmas::destroy($id->id);
        return redirect('/puskesmas')->with('delete', 'Data puskesmas Berhasil Dihapus');
    }
}
