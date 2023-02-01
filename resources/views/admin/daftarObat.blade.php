@extends('template.index')
@section('content')
<section class="home-section">
  <div class="home-content">
    {{-- <i class="bi bi-text-indent-left"></i> --}}

   <div class="hnd">
   <i class='bx bx-menu'></i>
    <span class="text"></span>
   </div>

    
    <div class="d-flex admin">
          <h6 class=" mt-1">Admin</h6>
          <img src="{{asset('images/people.png')}}" alt="Logo" width="32" height="32" class="rounded-circle">
        </div>
      </div>


  </div>
  <div class="sistem"><span >Sistem Informasi Apotek</span></div>
  
  <div class="konten">
  <div class="row mb-3 mt-n1">
                  <div class="col-6">
                  <div class="daftar">
              <th>Daftar Obat</th>
              </div>
                </div>
  <a href="" class="tmbh">
  <div class="btn d-flex col-5">
  <img src="{{asset('images/add.png')}}" alt="Logo" width="30" height="30" class="" > 
      <p>Tambah Obat</p>
  </div>
</a>
<div class="cari">
    <a href="">
          <!-- <img src="{{asset('img/Top Menu (1).png')}}" alt=""> -->
        </a>
      <input type="search" name="" id="" class="" placeholder="Search">
     
    </div>
<table >
    <thead class="col-6">
      <tr class="col-6">
          <th>id</th>
          <th>Nama Obat</th>
          <th>Nama Dagang</th>
          <th>Gol Obat</th>
          <th>Unit</th>
          <th>PBF/PT</th>
          <th>Jenis</th>
          <th>Expired</th>
          <th>Harga Beli</th>
          <th>Harga Beli Strip</th>
          <th>Harga Beli Satuan</th>
    
      </tr>
    </thead>
    <tbody>
      @foreach ($obat as $obat)
      <tr>
        <th>{{$obat->id}}</th>
        <td>{{$obat->nama_obat}}</td>
        <td>{{$obat->nama_dagang}}</td>
        <td>{{$obat->golongan_obat}}</td>
        <td>{{$obat->unit}}</td>
        <td>{{$obat->perusahaan}}</td>
        <td>{{$obat->jenis}}</td>
        <td>{{$obat->expired}}</td>
        <td>{{$obat->harga_beli}}</td>
        <td>{{$obat->harga_beli_strip}}</td>
        <td>{{$obat->harga_beli_satuan}}</td>
      </tr>
      @endforeach
    </tbody>
</table>

  </div>
</section>
@endsection