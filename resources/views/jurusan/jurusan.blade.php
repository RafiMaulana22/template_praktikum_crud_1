@extends('layout.template')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <b>List Jurusan</b>
    </div>

    <div class="card-body mt-3">
        <a href="/jurtam" class="btn btn-primary btn-sm mb-3">+ Tambah Data Jurusan</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sistem Informasi</td>
                        <td>
                            <a href="/juredi" class="badge bg-primary">
                                Edit
                            </a>

                            <a href="#" class="badge bg-danger">
                                Hapus
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Informatika</td>
                        <td>
                            <a href="/juredi" class="badge bg-primary">
                                Edit
                            </a>

                            <a href="#" class="badge bg-danger">
                                Hapus
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Teknik Industri</td>
                        <td>
                            <a href="/juredi" class="badge bg-primary">
                                Edit
                            </a>

                            <a href="#" class="badge bg-danger">
                                Hapus
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
