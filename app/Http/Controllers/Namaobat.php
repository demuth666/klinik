<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Namaobat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Detail.namaObat', );
    }
    public function add()
    {
        return view('admin.Detail.addNama');
    }

    public function edit()
    {
        return view('admin.Detail.editNama');
    }
}