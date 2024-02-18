<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Jurusan';

        return view('jurusan.jurusan', $data);
    }

    public function indjurdat()
    {
        $data['title'] = 'Data Jurusan Informatika';

        return view('jurusan.jurdat', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Jurusan';

        return view('jurusan.jurtam', $data);
    }

    public function edit()
    {
        $data['title'] = 'Edit Jurusan';

        return view('jurusan.juredi', $data);
    }
}
