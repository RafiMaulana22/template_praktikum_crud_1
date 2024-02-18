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
        <b>List Fakultas</b>
    </div>

    <div class="card-body mt-3">
        <a href="/faktam" class="btn btn-primary btn-sm mb-3">+ Tambah Data Fakultas</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Fakultas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Fakultas Sains dan Teknologi</td>
                        <td>
                            <a href="/fakedi" class="badge bg-primary">
                                Edit
                            </a>

                            <a href="#" class="badge bg-danger">
                                Hapus
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Fakultas Ekonomi dan Bisnis</td>
                        <td>
                            <a href="/fakedi" class="badge bg-primary">
                                Edit
                            </a>

                            <a href="#" class="badge bg-danger">
                                Hapus
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Fakultas Bahasa Asing</td>
                        <td>
                            <a href="/fakedi" class="badge bg-primary">
                                Edit
                            </a>

                            <a href="#" class="badge bg-danger">
                                Hapus
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Fakultas Ilmu Komunikasi</td>
                        <td>
                            <a href="/fakedi" class="badge bg-primary">
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
