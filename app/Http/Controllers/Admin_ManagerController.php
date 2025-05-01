<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_ManagerController extends Controller
{
    public function articleadmin()
    {
        return view('AdminManager/articleadmin');
    
    }
    public function buatarticle()
    {
        return view('AdminManager/buatarticle');
    
    }
    public function adminkursus()
    {
        return view('AdminManager/adminkursus');
    
    }
    
    public function tambahkursus()
    {
        return view('AdminManager/tambahkursus');
    }
    
    public function KelolaAkunAdmin()
    {
        return view('AdminManager/KelolaAkunAdmin');
    }
    
    public function RiwayatLog()
    {
        return view('AdminManager/RiwayatLog');
    }
    
    public function kelolapelamar()
    {
        return view('AdminManager/kelolapelamar');
    }
    
    public function pekerjaan()
    {
        return view('AdminManager/pekerjaan');
    }
    
    public function tambahloker()
    {
        return view('AdminManager/tambahloker');
    }
    
    public function singleartikel()
    {
        return view('AdminManager/singleartikel');
    }
    
    public function singlekursus()
    {
        return view('AdminManager/singlekursus');
    }

    public function singleloker()
    {
        return view('AdminManager/singleloker');
    }
    
    public function singlekelolapelamar()
    {
        return view('AdminManager/singlekelolapelamar');
    }
    
    public function laporan()
    {
        return view('AdminManager/laporan');
    }
    
    public function tambahperan()
    {
        return view('AdminManager/tambahperan');
    }
    
    public function editperan()
    {
        return view('AdminManager/editperan');
    }
    
    public function TidakLolos()
    {
        return view('AdminManager/TidakLolos');
    }
    
    public function LolosTahapSelanjutnya()
    {
        return view('AdminManager/LolosTahapSelanjutnya');
    }
    
    public function manager()
    {
        return view('AdminManager/manager');
    }
    
    public function loker()
    {
        return view('AdminManager/loker');
    }
    
    public function kursus()
    {
        return view('AdminManager/kursus');
    }
    
    public function pemateri()
    {
        return view('AdminManager/pemateri');
    }
    
    public function sudahdicek()
    {
        return view('AdminManager/SudahDicek');
    }
    
    public function belumdicek()
    {
        return view('AdminManager/BelumDicek');
    }
}
