<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    // table Data (Read)
    public function index()
    {

        $datas = Mobil::all();
        return view('admin.tabledata', compact(
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
        $model = new Mobil;
        return view('admin.formpost', compact(
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
        $kode_mobil = Mobil::get_code($request->merk);

        if($request->hasFile('gambar')){
            $img = $request->file('gambar')->store('mobil');
        } else {
            $img = null;
        }



        $model = new Mobil;
        $model->kode_mobil = $kode_mobil;
        $model->merk = $request->merk;
        $model->type = $request->type;
        $model->warna = $request->warna;
        $model->harga = $request->harga;
        $model->gambar = $img;
        $model->save();



        return redirect('Mobil');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_mobil)
    {
        $model = Mobil::find($kode_mobil);
        return view('admin.formedit', compact(
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
    public function update(Request $request, $kode_mobil)
    {
        $model = Mobil::find($kode_mobil);
        if($request->hasFile('gambar')){
            $img = $request->file('gambar')->store('mobil');
            if(Storage::exists($model->gambar)){
                Storage::delete($model->gambar);
            }
        } else {
            $img = $model->gambar;
        }

        $model->kode_mobil = $request->kode_mobil;
        $model->merk = $request->merk;
        $model->type = $request->type;
        $model->warna = $request->warna;
        $model->harga = $request->harga;
        $model->gambar = $img;
        $model->save();

        return redirect('Mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_mobil)
    {
        $model = Mobil::find($kode_mobil);
        $model->delete();
        return redirect('Mobil');
    }

}
