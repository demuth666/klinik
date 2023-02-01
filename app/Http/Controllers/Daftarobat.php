<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class DaftarObat extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('admin.daftarObat',[
            'obat' => $obat
        ]);
    }
}
