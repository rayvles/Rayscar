@extends('admin.layouts.main')

@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                  </div>
                @endif
                <div class="card border-left border-primary">
                    <div class="card-header">
                        <div class="card-title">
                            Cash Table
                        </div>
                    </div>
                    <div class="card-title mt-3 ml-3 mr-2">
                    <a href="{{ url('admin/formcash') }}"><button class="btn btn-dark" type="submit" name="submit">Tambahkan Data</button></a>
                    
                    </div>
                    <div class="card-body">
                        <div class="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Cash</th>
                                    <th scope="col">KTP Pembeli</th>
                                    <th scope="col">Nama Pembeli</th>
                                    <th scope="col">Kode Mobil</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Jumlah Pembayaran</th>
                                    <th scope="col">Tanggal Pembayaran</th>
                                    <th scope="col">Transaksi</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Foreach --}}
                                @foreach ($model as $key => $transaksi)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $transaksi->kode_cash }}</td>
                                        <td>{{ $transaksi->pembeli->ktp_pembeli }}</td>
                                        <td><span title="{{$transaksi->pembeli->nama_pembeli}}">{{ Str::limit($transaksi->pembeli->nama_pembeli, 20) }}</span></td>
                                        <td>{{ $transaksi->mobil->kode_mobil }}</td>
                                        <td>{{ $transaksi->mobil->merk }}</td>
                                        <td>{{ $transaksi->mobil->type }}</td>
                                        <td>Rp. {{ number_format($transaksi->mobil->harga) }}</td>
                                        <td>Rp. {{ number_format($transaksi->cash_bayar) }}</td>
                                        <td>{{ date('d/m/Y', strtotime($transaksi->cash_tgl)) }}</td>
                                        <td>
                                            <a href="/transaksi/cash/{{$transaksi->kode_cash}}/cetak-nota" target="_blank" title="Cetak nota" class="btn btn-sm btn-success mb-0"><i class="fas fa-print"></i></a>
                                        </td>
                                    </tr>
                    @endforeach
                                {{-- endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
