<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $obat = Obat::all();

        $this->validate($request, [
            'nama_obat' => 'required',
            'nama_dagang' => 'required',
            'golongan_obat' => 'required',
            'unit' => 'required',
            'perusahaan' => 'required',
            'harga_beli' => 'required',
            'harga_beli_strip' => 'required',
            'harga_beli_satuan' => 'required'
        ]);

        Obat::create([
            'nama_obat' => $request->nama_obat,
            'nama_dagang' => $request->nama_dagang,
            'golongan_obat' => $request->golongan_obat,
            'unit' => $request->unit,
            'perusahaan' => $request->perusahaan,
            'harga_beli' => $request->harga_beli,
            'harga_beli_strip' => $request->harga_beli_strip,
            'harga_beli_satuan' => $request->harga_beli_satuan,
        ]);

        return redirect()->back();
    }
}
