<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;
use App\Models\User;

class DaftarObat extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        $user = User::all();
        return view('admin.Obat.daftarObat',[
            'obat' => $obat,
            'user' => $user
        ]);
    }

    public function add()
    {
        return view('admin.Obat.add');
    }
}