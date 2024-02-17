@extends('layout.template')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/mahasiswa">Data Mahasiswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
</nav>

<form method="POST" action="" class="card">
    <div class="card-header">
        <b>Form Mahasiswa</b>
    </div>

    <div class="card-body mt-3 ">
        <div class="row">
            <div class="col-lg-3">
                <label for="">NIM Mahasiswa</label>
            </div>

            <div class="col-lg-9">
                <input type="text" class="form-control" name="nim_mahasiswa" placeholder="Masukkan nomor induk mahasiswa...">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Nama Mahasiswa</label>
            </div>

            <div class="col-lg-9">
                <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukkan nama lengkap mahasiswa...">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Tanggal Lahir</label>
            </div>

            <div class="col-lg-9">
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Jenis Kelamin</label>
            </div>

            <div class="col-lg-9">
                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                    <option selected disabled>Pilih Jenis Kelamin...</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <label for="">Jurusan</label>
            </div>

            <div class="col-lg-9">
                <select class="form-select" name="id_jurusan">
                    <option selected disabled>Pilih Jurusan...</option>
                    <option value="">Sistem Informasi</option>
                    <option value="">Informatika</option>
                    <option value="">Teknik Industri</option>
                </select>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button name="simpan" class="btn btn-success">Simpan Data</button>
        <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
    </div>
</form>

@endsection
