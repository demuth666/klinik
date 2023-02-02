@extends('template.index')
@section('content')
<section class="home-section">
    <div class="home-content">


        <div class="hnd">
            <span class="text"></span>
        </div>

        <div class="d-flex admin">

            <h6 class=" mt-1"> </h6>
        </div>

    </div>
    <div class="sistem"><span>Sistem Informasi Apotek</span></div>



    <div class="konten">
        <div class="row mb-3 mt-n1">
            <div class="col-6">
                <div class="daftar">
                    <th>Tambah Obat</th>
                </div>
            </div>
        </div>
        <div class="row mb-3 mt-n1 d-flex">
            <div class="    ">
                <form action="" method="post" class="form-horizontal form-label-left" novalidate>

                    <div class="col-6 mx-auto d-block">


                    </div>

                    <div>
                        <div class="container mt-4 bg-grey">


                            <div class="row">
                                <form action="" method="post" class="form-horizontal form-label-left" novalidate>
                                    <div class="col-3">
                                        <div class="d-grid gap-5">
                                            <label class="control-label" for="nama_obat">Nama Obat</label>
                                            <label class="control-label align-self-start" for="nama_dagang">Nama
                                                Dagang</label>
                                            <label class="control-label align-self-start" for="gol_obat">Gol
                                                Obat</label>
                                            <label class="control-label align-self-start mt-3" for="unit_obat">Unit
                                                Obat</label>
                                            <label class="control-label align-self-start mt-2"
                                                for="pbf/pt">PBF/PT</label>
                                            <label class="control-label align-self-start mt-1"
                                                for="nama_kategori">Jenis</label>
                                            <label class="control-label align-self-start mt-2" for="nama_kategori">Nama
                                                Pemasok</label>
                                            <label class="control-label align-self-start mt-2"
                                                for="nama_kategori">Expired</label>
                                            <label class="control-label align-self-start mt-2" for="nama_kategori">Harga
                                                Beli</label>
                                            <label class="control-label align-self-start mt-1" for="nama_kategori">Harga
                                                Beli Strip</label>
                                            <label class="control-label align-self-start mt-1" for="nama_kategori">Harga
                                                Beli Satuan</label>
                                            <label class="control-label align-self-start mt-1" for="nama_kategori">Harga
                                                Jual Strip</label>
                                            <label class="control-label align-self-start mt-1" for="nama_kategori">Harga
                                                Jual Satuan</label>
                                        </div>

                                    </div>
                                    <div class="col-7">
                                        <div class="d-grid gap-5">

                                            <input type="text" id="nama_kategori" name="nama_kategori"
                                                class="form-select" data-validate-length-range="1"
                                                data-validate-words="1" required="required">
                                            <input type="text" id="des_kat" name="des_kat" class="form-control"
                                                data-validate-length-range="1" data-validate-words="1"
                                                required="required">
                                            <input type="text" id="nama_kategori" name="nama_kategori"
                                                class="form-select" data-validate-length-range="1"
                                                data-validate-words="1" required="required">
                                            <input type="text" id="nama_kategori" name="nama_kategori"
                                                class="form-select" data-validate-length-range="1"
                                                data-validate-words="1" required="required">
                                            <input type="text" id="des_kat" name="des_kat" class="form-control"
                                                data-validate-length-range="1" data-validate-words="1"
                                                required="required">
                                            <input type="text" id="nama_kategori" name="nama_kategori"
                                                class="form-select" data-validate-length-range="1"
                                                data-validate-words="1" required="required">
                                            <input type="text" id="des_kat" name="des_kat" class="form-control"
                                                data-validate-length-range="1" data-validate-words="1"
                                                required="required">
                                            <input type="date" id="nama_kategori" name="nama_kategori" class=""
                                                data-validate-length-range="1" data-validate-words="1"
                                                required="required">
                                            <input type="text" id="des_kat" name="des_kat" class="form-control"
                                                data-validate-length-range="1" data-validate-words="1"
                                                required="required" placeholder="Rp.">
                                            <input type="text" id="nama_kategori" name="nama_kategori"
                                                class="form-select" data-validate-length-range="1"
                                                data-validate-words="1" required="required">
                                            <input type="text" id="nama_kategori" name="nama_kategori"
                                                class="form-select" data-validate-length-range="1"
                                                data-validate-words="1" required="required">
                                            <input type="text" id="des_kat" name="des_kat" class="form-control"
                                                data-validate-length-range="1" data-validate-words="1"
                                                required="required">
                                            <input type="text" id="nama_kategori" name="nama_kategori"
                                                class="form-select" data-validate-length-range="1"
                                                data-validate-words="1" required="required">

                                        </div>

                                    </div>
                            </div>

                        </div>
                        <div class="row mt-4 ">
                            <div class="form-group ">
                                <div class="col-6  mt-2 me-5">
                                    <a href="">

                                        <button id="send" type="submit"
                                            class="btn btn-primary float-end btn-lg">Simpan</button>
                                        <button type="button" class="btn btn-outline-primary float-end btn-lg"
                                            style="margin-right: 10px; ">Batal</button></a>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>


    </div>

</section>
@endsection