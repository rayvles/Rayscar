@extends('admin.layouts.main')

@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Form Cash</h1>
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
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ route('cash.store') }}" method="POST">
                        @csrf
                        <div class=" input-group mb-3 row">
                            
                            <label class="form-label col-sm-2" for="">KTP Pembeli</label>
                            <input type="text" class="form-control" id="ktp_pembeli" placeholder="KTP Pembeli..." value="{{old('ktp_pembeli') ?? '-'}}" aria-label="Recipient's username" aria-describedby="button-addon2" name="ktp_pembeli">
                            
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Pembeli</button>
                          </div>
                          @error('ktp_pembeli')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                          <div class=" input-group mb-3 row">
                            <label class="form-label col-sm-2" for="">Nama Pembeli</label>
                            <input type="text" class="form-control" id="nama_pembeli" value="{{old('nama_pembeli') ?? '-'}}" readonly placeholder="Nama Pembeli..." aria-label="Recipient's username" aria-describedby="button-addon2" name="nama_pembeli">
                            @error('nama_pembeli')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                          </div>
                          <div class=" input-group mb-3 row">
                            <label class="form-label col-sm-2" for="">No Telpon</label>
                            <input type="text" class="form-control" id="no_telp" value="{{old('no_telp') ?? '-'}}" readonly placeholder="No Telpon" aria-label="Recipient's username" aria-describedby="button-addon2" name="no_telp">
                            @error('no_telp')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                          </div>
                          <div class=" input-group mb-3 row">
                            <label class="form-label col-sm-2" for="">Alamat Pembeli</label>
                            <input type="text" class="form-control" id="alamat" value="{{old('alamat') ?? '-'}}" readonly placeholder="Alamat Pembeli..." aria-label="Recipient's username" aria-describedby="button-addon2" name="alamat">
                            @error('alamat')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                          </div>

                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pembeli</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="border-left border-primary">
                                                        <div class="">
                                                            <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">No</th>
                                                                        <th scope="col">KTP Pembeli</th>
                                                                        <th scope="col">Nama Pembeli</th>
                                                                        <th scope="col">Alamat Pembeli</th>
                                                                        <th scope="col">Telpon Pembeli</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($dataPembeli as $key=>$value)
                                                                    <tr>
                                                                        <td>{{ ++$key }}</td>
                                                                        <td>{{ $value->ktp_pembeli }}</td>
                                                                        <td>{{ $value->nama_pembeli }}</td>
                                                                        <td>{{ $value->alamat_pembeli }}</td>
                                                                        <td>{{ $value->telp_pembeli }}</td>
                                                                        <td><button type='button' class="btn btn-primary" data-bs-dismiss="modal"
                                                                            data-ktp-pembeli='{{ $value->ktp_pembeli }}'
                                                                            data-nama-pembeli='{{ $value->nama_pembeli }}'
                                                                            data-alamat='{{ $value->alamat_pembeli }}'
                                                                            data-no-telp='{{ $value->telp_pembeli }}' onclick="changePembeli()">add</button></td>
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        
                            <div class="input-group mb-3 mt-5 row">
                                <label class="form-label col-sm-2" for="">Kode Mobil</label>
                                <input type="text" class="form-control" id="kode_mobil" value="{{old('kode_mobil') ?? '-'}}" placeholder="Kode Mobil..." aria-label="Recipient's username" aria-describedby="button-addon2" name="kode_mobil">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">Mobil</button>
                              </div>
                              @error('kode_mobil')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                              <div class=" input-group mb-3 row">
                                <label class="form-label col-sm-2"  for="">Merk Mobil</label>
                                <input type="text" class="form-control" id="merk" value="{{old('merk') ?? '-'}}" readonly placeholder="Merk Pembeli..." aria-label="Recipient's username" aria-describedby="button-addon2" name="merk">
                                @error('merk')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                              </div>

                              <div class=" input-group mb-3 row">
                                <label class="form-label col-sm-2" for="">Type</label>
                                <input type="text" class="form-control" id="type" value="{{old('type') ?? '-'}}" readonly placeholder="Type..." aria-label="Recipient's username" aria-describedby="button-addon2" name="type">
                                @error('type')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                              </div>

                              <div class=" input-group mb-3 row">
                                <label class="form-label col-sm-2" for="">Warna</label>
                                <input type="text" class="form-control" id="warna" value="{{old('warna') ?? '-'}}" readonly placeholder="Warna..." aria-label="Recipient's username" aria-describedby="button-addon2" name="warna">
                                @error('warna')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                              </div>

                              <div class=" input-group mb-3 row">
                                <label class="form-label col-sm-2" for="">Harga</label>
                                <input type="text" class="form-control" id="harga" value="{{old('harga') ?? '-'}}" readonly placeholder="Harga..." aria-label="Recipient's username" aria-describedby="button-addon2" name="harga">
                                @error('harga')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                              </div>

                              <div class=" input-group mb-3 row">
                                <label class="form-label col-sm-2" for="">Gambar</label>
                                <input type="text" class="form-control" id="gambar" value="{{old('gambar') ?? '-'}}" readonly placeholder="Gambar..." aria-label="Recipient's username" aria-describedby="button-addon2" name="gambar">
                                @error('gambar')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                              </div>
    
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mobil</h5>
                                       
                                        </div>
                                        <div class="modal-body">
                                        
                                        {{-- Table Mobil --}}
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="border-left border-primary">
                                                        <div class="">
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
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($dataMobil as $key=>$value)
                                                                    <tr>
                                                                        <td>{{ ++$key }}</td>
                                                                        <td>{{ $value->kode_mobil }}</td>
                                                                        <td>{{ $value->merk }}</td>
                                                                        <td>{{ $value->type }}</td>
                                                                        <td>{{ $value->warna }}</td>
                                                                        <td>{{ $value->harga }}</td>
                                                                        <td><img src="{{ Storage::disk('public')->url($value->gambar) }}" style="object-fit: cover" width="100"  alt=""></td>
                                                                        <td><button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                                                            data-kode-mobil='{{ $value->kode_mobil }}'
                                                                            data-merk='{{ $value->merk }}' 
                                                                            data-type='{{ $value->type }}' 
                                                                            data-warna='{{ $value->warna }}'
                                                                            data-harga='{{ $value->harga }}'
                                                                            data-gambar='{{ $value->gambar }}'
                                                                            onclick="changeMobil()"
                                                                            >add</button></td>
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                        <div class="form-outline mb-4 mt-5">
                            <label class="form-label" for="">Tanggal Pembayaran</label>
                            <input class="form-control" type="date" name="cash_tgl" 
                            value="{{ old('cash_tgl') ?? ($pembeli->cash_tgl ?? '') }}">
                            @error('cash_tgl')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="">Jumlah Pembayaran</label>
                            <input class="form-control" type="number" min="0" name="cash_bayar"
                            value="{{ old('cash_bayar') ?? ($pembeli->cash_bayar ?? '') }}">
                            @error('cash_bayar')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-dark" type="submit" name="submit">Post</button>
                    </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        const changePembeli = () => {
            document.querySelector('input#ktp_pembeli').value = event.target.getAttribute('data-ktp-pembeli');
            document.querySelector('input#nama_pembeli').value = event.target.getAttribute('data-nama-pembeli');
            document.querySelector('input#alamat').value = event.target.getAttribute('data-alamat');
            document.querySelector('input#no_telp').value = event.target.getAttribute('data-no-telp');
            
        }

        const changeMobil = () => {
            document.querySelector('input#kode_mobil').value = event.target.getAttribute('data-kode-mobil');
            document.querySelector('input#merk').value = event.target.getAttribute('data-merk');
            document.querySelector('input#type').value = event.target.getAttribute('data-type');
            document.querySelector('input#warna').value = event.target.getAttribute('data-warna');
            document.querySelector('input#harga').value = event.target.getAttribute('data-harga');
            document.querySelector('input#gambar').value = event.target.getAttribute('data-gambar');
            
        }
    </script>
@endpush