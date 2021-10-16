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
                            Table Data Pembeli
                        </div>
                    </div>
                    <div class="card-title mt-3 ml-3 mr-2">
                    {{-- <a href="{{ url('admin/formpembeli') }}"><button class="btn btn-dark" type="submit" name="submit">Tambahkan Data</button></a> --}}
                                            <!-- Button trigger modal -->
                        <a type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Data
                        </a>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Pembeli</h5>
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
                                                        <form enctype="multipart/form-data" action="{{ url('Pembeli') }}" method="POST">
                                                            @csrf
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label" for="">KTP Pembeli</label>
                                                                <input class="form-control" type="text" name="ktp_pembeli">
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label" for="">Nama Pembeli</label>
                                                                <input class="form-control" type="text" name="nama_pembeli">
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label" for="">Alamat Pembeli</label>
                                                                <input class="form-control" type="text" name="alamat_pembeli">
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label" for="">Telpon Pembeli</label>
                                                                <input class="form-control" type="text" name="telp_pembeli">
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
                                    <th scope="col">KTP Pembeli</th>
                                    <th scope="col">Nama Pembeli</th>
                                    <th scope="col">Alamat Pembeli</th>
                                    <th scope="col">Telpon Pembeli</th>
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
                                    <td>{{ $value->ktp_pembeli }}</td>
                                    <td>{{ $value->nama_pembeli }}</td>
                                    <td>{{ $value->alamat_pembeli }}</td>
                                    <td>{{ $value->telp_pembeli }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td>
                                        {{-- <a class="text-decoration-none text-success" href="{{ url('Pembeli/'.$value->ktp_pembeli.'/edit') }}">Edit</a> --}}

                                        <a type="button" href="{{ url('Pembeli/'.$value->ktp_pembeli.'/edit') }}" class="text-decoration-none text-success" data-bs-toggle="modal" data-bs-target="#editModal{{ $key }}">
                                            Edit
                                        </a>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="editModal{{ $key }}" tabindex="-1" aria-labelledby="editModal{{ $key }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="editModal{{ $key }}Label">Form Pembeli</h5>
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
                                                                        <form action="{{ url('Pembeli/'.$value->ktp_pembeli) }}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" name="_method" value="PATCH">
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">KTP Pembeli</label>
                                                                                <input class="form-control" type="text" name="ktp_pembeli" value="{{ $value->ktp_pembeli }}">
                                                                            </div>
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">Nama Pembeli</label>
                                                                                <input class="form-control" type="text" name="nama_pembeli" value="{{ $value->nama_pembeli }}" >
                                                                            </div>
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">Alamat Pembeli</label>
                                                                                <input class="form-control" type="text" name="alamat_pembeli" value="{{ $value->alamat_pembeli }}" >
                                                                            </div>
                                                                            <div class="form-outline mb-4">
                                                                                <label class="form-label" for="">Telpon Pembeli</label>
                                                                                <input class="form-control" type="text" name="telp_pembeli" value="{{ $value->telp_pembeli }}" >
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
                                        <form action="{{ url('Pembeli/'.$value->ktp_pembeli) }}" method="POST">
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

