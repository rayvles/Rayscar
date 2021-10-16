<?php

namespace App\Http\Controllers;

use App\Models\belicash;
use App\Models\kredit;
use App\Models\Mobil;
use App\Models\Pembeli;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class CashController extends Controller
{
    public function index()
    {
        $model = belicash::with(['pembeli', 'mobil'])->latest()->get();
        return view('admin.cashtable', compact(
            'model'
        ));

    }

    public function create()
    {
        
        $dataPembeli = Pembeli::all();
        $dataMobil = Mobil::whereNotIn('kode_mobil', beliCash::pluck('kode_mobil')->all())
        ->whereNotIn('kode_mobil', kredit::pluck('kode_mobil')->all())->get();
        $model = new belicash;
        return view('admin.formcash', compact(
            'model', 'dataPembeli', 'dataMobil'
        ));
    }

     
    public function store(Request $request)
    {

        $mobil = Mobil::find($request->kode_mobil);

        $request->validate([
            'kode_mobil' => 'required|exists:mobil,kode_mobil|unique:beli_cash,kode_mobil|unique:kredit,kode_mobil',
            'ktp_pembeli' => 'required|exists:pembeli,ktp_pembeli',
            'cash_bayar' => ($mobil) ? 'required|numeric|min:' . $mobil->harga : 'required|numeric',
        ]);

        $kode_cash = beliCash::get_code();

        beliCash::create([
            'kode_cash' => $kode_cash,
            'kode_mobil' => $mobil->kode_mobil,
            'ktp_pembeli' => $request->ktp_pembeli,
            'cash_bayar' => $request->cash_bayar,
            'cash_tgl' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/transaksi/cash')
            ->with('success', 'Pembelian cash berhasil ditambahkan')
            ->with('print-nota', "<script>$(document).ready(function() {
            window.open('/transaksi/cash/" . $kode_cash . "/cetak-nota', '_blank');
        })</script>");
       
    }

    public function cetak_nota(beliCash $cash)
    {
        $cash->load(['pembeli', 'mobil']);
        $pdf = PDF::loadView('admin.nota', [
            'transaksi' => $cash
        ]);
        return $pdf->stream();
    }
}
