<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function index()
    {
        $hotel = DB::table('hotel')->get();

        return view('hotel', ['hotel' => $hotel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambahhotel');
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


        $tambahhotel = new Hotel;
        $tambahhotel->name = $request->name;
        $tambahhotel->alamat = $request->alamat;
        $tambahhotel->no_telepon = $request->no_telepon;
        $tambahhotel->email = $request->email;

        $tambahhotel->save();


        return redirect('/hotel')->with('status', 'Data Hotel Berhasil Ditambahkan');
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
    public function edit(Hotel $id)
    {
        //
        return view('edithotel',  compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'alamat' => 'required',

        ]);
        Hotel::where('id', $id->id)
            ->update([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'email' => $request->email
            ]);

        return redirect('/hotel')->with('status', 'Data Hotel Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $id)
    {
        //
        Hotel::destroy($id->id);
        return redirect('/hotel')->with('delete', 'Data Hotel Berhasil Dihapus');
    }
}
