<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';

        return view('mahasiswa.mahasiswa', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Mahasiswa';

        return view('mahasiswa.mahtam', $data);
    }

    public function edit()
    {
        $data['title'] = 'Edit Mahasiswa';

        return view('mahasiswa.mahedi', $data);
    }
}
