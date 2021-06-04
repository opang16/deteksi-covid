<?php

namespace App\Http\Controllers;

use App\Models\Rumahsakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class rumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahsakit = DB::table('rumahsakit')->get();

        return view('rumahSakit', ['rumahsakit' => $rumahsakit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambahrumahsakit');
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


        $tambahrumahsakit = new Rumahsakit;
        $tambahrumahsakit->name = $request->name;
        $tambahrumahsakit->alamat = $request->alamat;
        $tambahrumahsakit->no_telepon = $request->no_telepon;
        $tambahrumahsakit->email = $request->email;

        $tambahrumahsakit->save();


        return redirect('/rumah-sakit')->with('status', 'Data Rumah Sakit Berhasil Ditambahkan');
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
    public function edit(Rumahsakit $id)
    {
        //
        return view('editrs',  compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rumahsakit $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'alamat' => 'required',

        ]);
        Rumahsakit::where('id', $id->id)
            ->update([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'email' => $request->email
            ]);

        return redirect('/rumah-sakit')->with('status', 'Data Rumah Sakit Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rumahsakit $id)
    {
        //
        Rumahsakit::destroy($id->id);
        return redirect('/rumah-sakit')->with('delete', 'Data Rumah Sakit Berhasil Dihapus');
    }
}
