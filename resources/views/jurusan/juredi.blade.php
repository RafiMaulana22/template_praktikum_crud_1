@extends('layout.template')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/jurusan">Data Jurusan</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
</nav>

<form method="POST" action="" class="card">
    <div class="card-header">
        <b>Form Jurusan</b>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <label for="">Nama Jurusan</label>
            </div>

            <div class="col-lg-9">
                <input type="text" class="form-control" value="Informatika" name="nama_jurusan" placeholder="Masukkan nama jurusan...">
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button name="edit" class="btn btn-success">Edit Data</button>
        <a href="/jurusan" class="btn btn-danger">Kembali</a>
    </div>
</form>

@endsection
