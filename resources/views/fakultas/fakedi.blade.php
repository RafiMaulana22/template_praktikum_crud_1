@extends('layout.template')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/fakultas">Data Fakultas</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
</nav>

<form method="POST" action="" class="card">
    <div class="card-header">
        <b>Form Fakultas</b>
    </div>

    <div class="card-body mt-3">
        <div class="row">
            <div class="col-lg-3">
                <label for="">Nama Fakultas</label>
            </div>

            <div class="col-lg-9">
                <input type="text" class="form-control" name="nama_fakultas" value="Fakultas Sains dan Teknologi" placeholder="Masukkan nama fakultas...">
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button name="simpan" class="btn btn-success">Simpan Data</button>
        <a href="/fakultas" class="btn btn-danger">Kembali</a>
    </div>
</form>

@endsection
