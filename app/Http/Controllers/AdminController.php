<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function obat()
    {

        return view('admin/daftarObat');

        return redirect('asfa');

    }
}
