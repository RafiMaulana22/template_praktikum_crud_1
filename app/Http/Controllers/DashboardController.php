<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';

        return view('dashboard.dashboard', $data);
    }

    public function indjur()
    {
        $data['title'] = 'Dashboard Jurusan';
        $data['welcome'] = 'Fakultas Sains dan Teknologi';

        return view('dashboard.dasjur', $data);
    }
}
