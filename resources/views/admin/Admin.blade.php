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
                            Hello Rayvles Welcome!
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius placeat nulla quos repellendus vero! Alias nesciunt dignissimos soluta ex quas, iusto esse aut tempora aliquam, ipsum, quibusdam eaque doloremque ipsam?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
