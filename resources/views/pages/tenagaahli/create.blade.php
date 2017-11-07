@extends('layouts.master')

@section('title')
    <title>Master Tenaga Ahli - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Tambah Data Tenaga Ahli</h1>
            <p>Berikut adalah halaman untuk menambahkan data tenaga ahli.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('ta.index') }}">Master Tenaga Ahli</a></li>
            <li class="active">Tambah Data Tenaga Ahli</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Formulir Tambah Tenaga Ahli</h2>
                    <p>Silahkan lengkapi formulir berikut.</p>
                </div>              
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Nama <span class="text-danger">*</span></label>
                        <input name="nama" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Alamat <span class="text-danger">*</span></label>
                        <textarea name="alamat" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon <span class="text-danger">*</span></label>
                        <input name="telp" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input name="email" class="form-control" type="email">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan Terakhir <span class="text-danger">*</span></label>
                        <select name="pendidikan" id="" class="form-control">
                            <option value="" disabled selected>-- Pilih --</option>
                            <option value="SD">SD</option>
                            <option value="SMP / Sederajat">SMP / Sederajat</option>
                            <option value="SMA / Sederajat">SMA / Sederajat</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sertifikasi </label>
                        <textarea name="sertifikasi" cols="30" rows="3" class="form-control"></textarea>
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