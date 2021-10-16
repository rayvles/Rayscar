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
                <div class="card border-left border-primary">
                    <div class="card-header">
                        <div class="card-title">
                            Table Data
                        </div>
                    </div>
                    <div class="card-title mt-3 ml-3 mr-2">
                    {{-- <a href="{{ url('admin/formpost') }}"><button class="btn btn-dark" type="submit" name="submit">Tambahkan Data</button></a>
                     --}}

                    <!-- Button trigger modal -->
                <a type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambahkan Data
                </a>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Car</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <div class="card border-left border-primary">
                                            <div class="card-header">
                                            </div>
                                            <div class="card-body">
                                                <form enctype="multipart/form-data" action="{{ url('Mobil') }}" method="POST">
                                                    @csrf
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="">Merk</label>
                                                        <input class="form-control" type="text" name="merk">
                                                    </div>
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="">Type</label>
                                                        <input class="form-control" type="text" name="type">
                                                    </div>
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="">Warna</label>
                                                        <input class="form-control" type="text" name="warna">
                                                    </div>
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="">Harga</label>
                                                        <input class="form-control" type="text" name="harga">
                                                    </div>
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="">Gambar</label>
                                                        <input class="form-control" type="file" name="gambar">
                                                    </div>
                        
                                                    <button class="btn btn-dark" type="submit" name="submit">Post</button>
                                                </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Mobil</th>
                                    <th scope="col">Merk</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Warna</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Created_At</th>
                                    <th scope="col">Update_at</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $key=>$value)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $value->kode_mobil }}</td>
                                    <td>{{ $value->merk }}</td>
                                    <td>{{ $value->type }}</td>
                                    <td>{{ $value->warna }}</td>
                                    <td>{{ $value->harga }}</td>
                                    <td><img src="{{ Storage::disk('public')->url($value->gambar) }}" style="object-fit: cover" width="100"  alt=""></td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td>
                                        {{-- <a class="text-decoration-none text-success" href="{{ url('Mobil/'.$value->kode_mobil.'/edit') }}">Edit</a> --}}
                                        <a class="text-decoration-none text-success" href="{{ url('Mobil/'.$value->kode_mobil.'/edit') }}"  data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            Edit
                                        </a>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Form Edit Car</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="card border-left border-primary">
                                                                    <div class="card-header">
                                                                        <div class="card-title">
                                                                            Form Edit
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <form action="{{ url('Mobil/'.$value->kode_mobil) }}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" name="_method" value="PATCH">
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">Kode Mobil</label>
                                                                                <input class="form-control" type="text" name="kode_mobil" value="{{ $value->kode_mobil }}">
                                                                            </div>
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">Merk</label>
                                                                                <input class="form-control" type="text" name="merk" value="{{ $value->merk }}" >
                                                                            </div>
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">Type</label>
                                                                                <input class="form-control" type="text" name="type" value="{{ $value->type }}" >
                                                                            </div>
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">Warna</label>
                                                                                <input class="form-control" type="text" name="warna" value="{{ $value->warna }}" >
                                                                            </div>
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">Harga</label>
                                                                                <input class="form-control" type="text" name="harga" value="{{ $value->harga }}" >
                                                                            </div><div class="form-outline mb-4">
                                                                                <label class="form-label" for="">gambar</label>
                                                                                <input class="form-control" type="file" name="gambar" value="{{ $value->gambar }}" >
                                                                            </div>
                                                                            <button class="btn btn-dark" type="submit" name="submit">Edit</button>
                                                                        </form>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ url('Mobil/'.$value->kode_mobil) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn text-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
