@extends('layout.template')

@section('content')

<div class="alert alert-primary">
    Selamat Datang Di Halaman Dashboard
</div>

<div class="row mt-3">
    <div class="col-lg-8">
        <ol class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-start bg-primary">
                <div class="ms-2 me-auto">
                    <div class="text-white">
                        <a href="/jurusan" class="text-white"><i class='bx bxs-dashboard'></i> Data Jurusan</a>
                    </div>
                </div>
                <span class="badge bg-primary rounded-pill">3</span>
            </li>
        </ol>

        <div class="row mt-1">
            <div class="col-md-4 mt-3">
                <div class="card text-bg-light">
                    <div class="card-header text-center bg-primary text-white">
                        Sistem Informasi
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mt-3"><b>0</b></h5>
                        <span>Mahasiswa</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card text-bg-light">
                    <div class="card-header text-center bg-primary text-white">
                        Informatika
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mt-3"><b>1</b></h5>
                        <span>Mahasiswa</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card text-bg-light">
                    <div class="card-header text-center bg-primary text-white">
                        Teknik Industri
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mt-3"><b>0</b></h5>
                        <span>Mahasiswa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mt-3">
        <span><b>Detail Berdasarkan Gender</b></span>
        <div class="card mt-3">
            <div class="card-body">
                <p class="card-text">Jumlah Mahasiswa Laki-Laki : 1</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <p class="card-text">Jumlah Mahasiswa Perempuan : 0</p>
            </div>
        </div>
    </div>
</div>

@endsection
