<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    // table Data (Read)
    public function index()
    {

        $datas = Pembeli::all();
        return view('admin.tabledatapembeli', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pembeli;
        return view('admin.formpembeli', compact(
            'model'
        ));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Create function
    public function store(Request $request)
    {
        $model = new Pembeli;
        $model->ktp_pembeli = $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli = $request->alamat_pembeli;
        $model->telp_pembeli = $request->telp_pembeli;
        $model->save();
        return redirect('Pembeli');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ktp_pembeli)
    {
        $model = Pembeli::find($ktp_pembeli);
        return view('admin.formeditpembeli', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ktp_pembeli)
    {
        $model = Pembeli::find($ktp_pembeli);
        $model->ktp_pembeli = $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli = $request->alamat_pembeli;
        $model->telp_pembeli = $request->telp_pembeli;
        $model->save();

        return redirect('Pembeli');
    }

    public function destroy($ktp_pembeli)
    {
        $model = Pembeli::find($ktp_pembeli);
        $model->delete();
        return redirect('Pembeli');
    }

}
