@extends('layout.template')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dasjur">Dashboard Jurusan</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <b>List {{ $title }}</b>
    </div>

    <div class="card-body mt-3">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2202310098</td>
                        <td>Rafi Nur Maulana</td>
                        <td>2003-06-21</td>
                        <td>Laki-Laki</td>
                        <td>Informatika</td>
                        <td>
                            <a href="/mahedi" class="badge bg-primary">
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
