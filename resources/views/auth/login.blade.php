<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title>Klinik Pratama Nur Intan</title>
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand text-primary h6" href="#">
            <img src="{{asset('images/logo.png')}}" alt="Logo" width="36" height="36" class="d-inline-block align-text-top"> 
            Klinik Pratama Nur Intan
          </a>
        </div>
      </nav>
    <div class="container pt-5">
        <div class="box">
            <div class="row contentForm">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{asset('images/klinik.png')}}" alt="" class="img-fluid">
                    <!-- <h4 class="text-center fw-bold"><span class="color">Selamat Datang di Website Absensi</span></h4> -->
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mt-5 p-lg-4">
                    <h4 class="text-start mx-lg-2 text-primary fw-bold h3">Sistem Informasi Apotek Klinik Pratama Nur Intan</h4>
                    <form class="mt-2 p-3" action="{{url('proses_login')}}" method="POST" id="logForm">
                        {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="text" class="form-control" id="inputEmailAddres" aria-describedby="emailHelp" name="username">
                          @if($errors->has('username'))
                          <span class="error">{{ $errors->first('username') }}</span>
                          @endif
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                          @if($errors->has('password'))
                          <span class="error">{{ $errors->first('password') }}</span>
                          @endif
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    -->
  </body>
</html>