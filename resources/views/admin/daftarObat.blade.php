<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Klinik</title>
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- bootstrap icon  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    

  {{-- Boxicon --}}

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- My Style -->
  <link rel="stylesheet" href="{{asset('css/class.css')}}">

  <!-- Loading -->
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }

    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font: 14px arial;
    }
  </style>
</head>

<body>
  {{-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/beranda">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datasiswa">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/absen">Absen</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link"> <i class="bi bi-box-arrow-right"></i> Logout</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
  <!-- konten -->
  <div class="sidebar ">
    <div class="logo-details">
      <img src="{{asset('images/logo.png')}}" alt="Logo" width="36" height="36 " class="m-3" > 
      <!-- {{-- <img src="{{ asset('img/') }}" alt=""> --}} -->
      <span class="logo_name">Klinik Pratama Nur Intan</span>
    </div>
    <ul class="nav-links">
      <li class="m-2">
        <a href="/">
          {{-- <i class='bx bx-home-alt'></i> --}}
          {{-- <img src="{{ asset('img/iconoir_home-simple-door.png') }}" alt=""> --}}
          <img src="{{asset('images/dash.png')}}" alt="Logo" width="30" height="30 " class="" > 
          <span class="link_name m-2">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li class=""><a class="link_name" href="/">Dashboard</a></li>
        </ul>
      </li>

      <li class='sub-menu m-2'>
          <a href=''>
          <img src="{{asset('images/obat.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Obat</span>
          <div class='fa fa-caret-down right'>
          </div></a>
            <ul class=" ">
              <li><a href='#settings' >Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
              
          </li>
          <li class='sub-menu m-2'>
          <a href=''>
          <img src="{{asset('images/detail.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Detail Obat</span>
          <div class='fa fa-caret-down right'>
          </div></a>
            <ul class=" ">
              <li><a href='#settings' >Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
              
          </li>
          <li class='sub-menu m-2'>
          <a href=''>
          <img src="{{asset('images/pemasok.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Pemasok</span>
          <div class='fa fa-caret-down right'>
          </div></a>
            <ul class=" ">
              <li><a href='#settings' >Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
              
          </li>
          <li class='sub-menu m-2'>
          <a href=''>
          <img src="{{asset('images/pembelian.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Pembelian</span>
          <div class='fa fa-caret-down right'>
          </div></a>
            <ul class=" ">
              <li><a href='#settings' >Daftar Obat</a></li>
              <li><a href='#settings'>Obat Kedaluarsa</a></li>
              <li><a href='#settings'>Obat Habis</a></li>
              </ul>
              
              <li class='sub-menu m-2'>
          <a href=''>
          <img src="{{asset('images/laporan.png')}}" alt="Logo" width="30" height="30 "  > 
          <span class="link_name m-2">Laporan</span>
          <div class='fa fa-caret-down right color-grey'>
          </div></a>
            <ul class=" ">
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
            <th>&nbsp;</th>
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
        <tr>
          <th>th</th>
          <td>td</td>
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

    </div>
  </section>

  {{-- <div class="maincontent">
        <h1 class="ms-4">APLIKASI ABSENSI</h1> --}}
  {{-- @yield('content') --}}

  {{-- </div> --}}

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