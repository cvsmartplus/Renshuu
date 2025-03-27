<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyAdminController extends Controller
{
    // Dashboard (Beranda)
    public function dashboard()
    {
        return view('CompanyDashboard.dashboard');
    }

    // Kelola Pekerjaan
    public function pekerjaan()
    {
        return view('CompanyAdmin.pekerjaan');
    }

    // Kelola Pelamar
    public function pelamar()
    {
        return view('CompanyAdmin.pelamar');
    }

    // Pengaturan Akun
    public function pengaturan()
    {
        return view('CompanyAdmin.pengaturan');
    }

    // Logout Page
    public function logout()
    {
        return view('CompanyAdmin.logout');
    }
}
