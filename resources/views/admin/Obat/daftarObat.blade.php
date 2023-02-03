@extends('template.index')
@section('content')
  <section class="home-section">
    <div class="home-content">
      

     <div class="hnd">
      <span class="text"></span>
     </div>

      <div class="d-flex admin">
        @if (Auth::check())
            <h6 class=" mt-1"> {{ Auth::user()->username }}</h6>
          </div>
        @endif
    </div>
    <div class="sistem"><span >Sistem Informasi Apotek</span></div>
    
    <div class="konten">
      <div class="row mb-3 mt-n1">
        <div class="col-6">
          <div class="daftar">
            <th>Daftar Obat</th>
          </div>
        </div>
      </div>
          
    <div>
<a href="{{ route ('add.obat') }}"><button type="button" class="btn btn-outline-primary text-white h6"><i class="bi bi-plus-circle"></i> Tambah Obat</button></a>
          </div>
<div class="row">
  <div class="col-md-2">
    <div class="d-inline">show</div>
    <label class="d-inline" for=""><select class="w-50" name="nambah_length" aria-controls="nambah" class="form-control input-sm " id="">
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>

              </select></label>

  </div>
  <div class="col-md-1">
  <img class="align-item-start" src="{{asset('images/copy.png')}}" alt="Logo" width="30" height="30" style=" margin-right: 50px;" > 

  </div>
  <div class="col-md-1">
  <img src="{{asset('images/dok.png')}}" alt="Logo" width="30" height="30" style=" margin-bottom: 50px; margin-right: 80px;" >

  </div>
  <div class="col-md-1">
  <img src="{{asset('images/printer.png')}}" alt="Logo" width="30" height="30" style="  margin-right: 110px;" > 

  </div>
  <div class="col-md-7">
    <div class="cari" style="width: 400px; margin-left: 70px;">
      <a href="">
          </a>
        <input type="search" name="" id="" class="" placeholder="Search">
       
</div>
  </div>
</div>
<div>
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

  <div class="d-flex justify-content-end mt-3">
      <nav aria-label="Page navigation example ">
      <ul class="pagination">
        <li class="page-item">
        <li class="page-item"><span class="page-link" href="#">Previous</span></li>
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only"></span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only"></span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  

    </div>
  </section>
  @endsection