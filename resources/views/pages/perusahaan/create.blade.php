@extends('layouts.master')

@section('title')
    <title>Master Perusahaan - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Tambah Data Perusahaan</h1>
            <p>Berikut adalah halaman untuk menambahkan data perusahaan.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('perusahaan.index') }}">Master Perusahaan</a></li>
            <li class="active">Tambah Data Perusahaan</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Formulir Tambah Perusahaan</h2>
                    <p>Silahkan lengkapi formulir berikut.</p>
                </div>              
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Nama Perusahaan <span class="text-danger">*</span></label>
                        <input name="nama" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Nomor SIUP <span class="text-danger">*</span></label>
                        <input name="nomor_siup" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Jenis SIUP <span class="text-danger">*</span></label>
                        <select name="jenis_siup" class="form-control">
                            <option value="" disabled selected></option>
                            <option value="Kecil">Kecil</option>
                            <option value="Non Kecil">Non Kecil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Telepon Perusahaan</label>
                        <input name="telp" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Email Perusahaan</label>
                        <input name="email" class="form-control" type="email">
                    </div>
                    <div class="form-group">
                        <label>Sertifikasi Perusahaan</label>
                        <textarea name="sertifikasi" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Alamat Perusahaan</label>
                        <textarea name="alamat" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </form>
            </div>

            <div class="block-footer">
                <button class="btn btn-primary pull-right">Simpan</button>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts')    
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
@endsection