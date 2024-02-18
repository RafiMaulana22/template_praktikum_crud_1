<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Fakultas';

        return view('fakultas.fakultas', $data);
    }

    public function indfakdat()
    {
        $data['title'] = 'Data Fakultas Sains dan Teknologi';

        return view('fakultas.fakdat', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Fakultas';

        return view('fakultas.faktam', $data);
    }

    public function edit()
    {
        $data['title'] = 'Edit Fakultas';

        return view('fakultas.fakedi', $data);
    }
}
