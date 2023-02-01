@extends('template.index')
@section('content')
<section class="home-section">
  <div class="home-content">
    {{-- <i class="bi bi-text-indent-left"></i> --}}

   <div class="hnd">
   <i class='bx bx-menu'></i>
    <span class="text"></span>
   </div>

    
<<<<<<< HEAD
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
     
=======

  {{-- Boxicon --}}

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- My Style -->
  <link rel="stylesheet" href="{{asset('css/class.css')}}">

  <!-- Loading -->
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

  
</head>

<body>
  
  <!-- konten -->
  <div class="sidebar ">
    <div class="logo-details">
      <img src="{{asset('images/logo.png')}}" alt="Logo" width="36" height="36 " class="m-3" >
      <span class="logo_name">Klinik Pratama Nur Intan</span>
    </div>
    <ul class="nav-links">
      <li class="m-2">
        <a href="/">
          
          <img src="{{asset('images/dash.png')}}" alt="Logo" width="30" height="30 " class="" > 
          <span class="link_name m-2">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li class=""><a class="link_name" href="/">Dashboard</a></li>
        </ul>
      </li>

      <li class='sub-menu m-2'>
          <a href='#'>
          <img src="{{asset('images/obat.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Obat</span>
          <div class='fa fa-caret-down right'>
          </div></a>
            <ul class="drop_link ">
              <li><a href='#settings'>Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
              
          </li>
          <li class='sub-menu m-2'>
          <a href='#'>
          <img src="{{asset('images/detail.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Detail Obat</span>
          <div class='fa fa-caret-down right'>
          </div></a>
          <ul class="drop_link ">
              <li><a href='#settings' >Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
              
          </li>
          <li class='sub-menu m-2'>
          <a href='#'>
          <img src="{{asset('images/pemasok.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Pemasok</span>
          <div class='fa fa-caret-down right'>
          </div></a>
          <ul class="drop_link ">
              <li><a href='#settings' >Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
              
          </li>
          <li class='sub-menu m-2'>
          <a href='#'>
          <img src="{{asset('images/pembelian.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Pembelian</span>
          <div class='fa fa-caret-down right'>
          </div></a>
          <ul class="drop_link ">
              <li><a href='#settings' >Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
              
              <li class='sub-menu m-2'>
          <a href='#'>
          <img src="{{asset('images/laporan.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Laporan</span>
          <div class='fa fa-caret-down right '>
          </div></a>
          <ul class="drop_link ">
              <li><a href='#settings' >Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
        
          <div class="profile-content">
          

          <!-- </div>
          {{-- <div class="name-job">
            <div class="profile_name">{{Auth::user()->name}}</div>
            <div class="job">{{ Auth::user()->role }}</div>
          </div> --}}
          <a href="/login"><i class='bx bx-log-in-circle'></i></a> -->

              </div>
            </li>
          </ul>
        </div>
  <section class="home-section">
    <div class="home-content">
      

     <div class="hnd">
      <span class="text"></span>
     </div>

      
      <div class="d-flex admin">
            <h6 class=" mt-1">Sugih</h6>
            <img src="{{asset('images/people.png')}}" alt="Logo" width="32" height="32" class="rounded-circle">
          </div>
        </div>


    </div>
    <!-- <div class="preloader">
      <div class="loading">
        <img src="{{asset('img/loading-bar.gif')}}" width="100">
        <p class="ms-2">Harap Tunggu</p>
      </div>
    </div> -->
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
    <!-- <a href="" class="tmbh">
    <div class="btn d-flex col-5">
    <img src="{{asset('images/add.png')}}" alt="Logo" width="30" height="30" class="" > 
        <p>Tambah Obat</p>
    </div>
</a> -->
<a href="#"></a><button type="button" class="btn btn-outline-primary text-white h6"><i class="bi bi-plus-circle"></i> Tambah Obat</button></a>
          </div>

<!-- <div class="">
  <div class="row justify-content-start ">
    <div class="col-1 ">
      Show
    </div>
    <div class="col-1">
      <label for=""><select name="nambah_length" aria-controls="nambah" class="form-control input-sm " id="">
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>

              </select></label>
    </div>
    <div>
    <img src="{{asset('images/copy.png')}}" alt="Logo" width="30" height="30" class="" > 
    <img src="{{asset('images/dok.png')}}" alt="Logo" width="30" height="30" class="" > 
    <img src="{{asset('images/printer.png')}}" alt="Logo" width="30" height="30" class="" > 
    </div>
  </div>       
</div>     -->
<!-- <div class="cari">
      <a href="">
          </a>
        <input type="search" name="" id="" class="" placeholder="Search">
       
</div> -->
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
<div?>
<table >
      <thead class="col-6">
        <tr class="col-6">
            <th>&nbsp;</th>
            <th>Nama Obat</th>
            <th>Nama Dagang</th>
            <th>Gol Obat</th>
            <th>Unit</th>
            <th>PBF/PT</th>
            <th>Jenis</th>
            <th>Expired</th>
            <th>Harga Beli</th>
            <th>Harga Beli Satuan</th>
            <th>Harga Jual Satuan</th>
            
			
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>Antibiotik</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
        </tr>
        <tr>
          <th>1</th>
          <td>Antibiotik</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
        </tr>
        <tr>
          <th>1</th>
          <td>Antibiotik</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
          <td>td</td>
        </tr>
        
        
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
  

>>>>>>> f01716271e58b96c439c6e257bd9490c6da3496b
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

<<<<<<< HEAD
  </div>
</section>
@endsection
=======
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <script src="{{ asset('assets/script.js') }}"></script>
  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>
  <script>
  
  $('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
$(this).parent(".sub-menu").children("ul").slideToggle("100");
$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});


</script>
</body>

</html>
>>>>>>> f01716271e58b96c439c6e257bd9490c6da3496b
