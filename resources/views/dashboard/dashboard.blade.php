@extends('layout.template')

@section('content')

<div class="alert alert-primary">
    Selamat Datang Di Halaman Dashboard
</div>

<div class="row">
    <div class="col-lg-12">
        <ol class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-start bg-primary">
                <div class="ms-2 me-auto">
                    <div class="text-white">
                        <a href="/fakultas" class="text-white"><i class='bx bxs-school'></i> Fakultas</a>
                    </div>
                </div>
                <span class="badge bg-primary rounded-pill">3</span>
            </li>
        </ol>

        <div class="row mt-1">
            <div class="col-md-6 mt-3">
                <div class="card text-bg-light">
                    <div class="card-header text-center bg-primary text-white">
                        <a href="/dasjur" class="text-white">Fakultas Sains dan Teknologi</a>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title mt-5"><b>3</b></h3>
                        <span>Jurusan</span>
                        <div class="dropdown-divider mt-5"></div>
                        <a href="/fakdat" class="btn btn-primary btn-sm mb-3 mt-4">Mahasiswa : 1</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <div class="card text-bg-light">
                    <div class="card-header text-center bg-primary text-white">
                        <a href="/dasjur" class="text-white">Fakultas Ekonomi dan Bisnis</a>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title mt-5"><b>2</b></h3>
                        <span>Jurusan</span>
                        <div class="dropdown-divider mt-5"></div>
                        <a href="/fakfst" class="btn btn-primary btn-sm mb-3 mt-4">Mahasiswa : 0</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <div class="card text-bg-light">
                    <div class="card-header text-center bg-primary text-white">
                        <a href="/dasjur" class="text-white">Fakultas Bahasa Asing</a>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title mt-5"><b>1</b></h3>
                        <span>Jurusan</span>
                        <div class="dropdown-divider mt-5"></div>
                        <a href="/fakdat" class="btn btn-primary btn-sm mb-3 mt-4">Mahasiswa : 0</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <div class="card text-bg-light">
                    <div class="card-header text-center bg-primary text-white">
                        <a href="/dasjur" class="text-white">Fakultas Ilmu Komunikasi</a>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title mt-5"><b>1</b></h3>
                        <span>Jurusan</span>
                        <div class="dropdown-divider mt-5"></div>
                        <a href="/fakfst" class="btn btn-primary btn-sm mb-3 mt-4">Mahasiswa : 0</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
