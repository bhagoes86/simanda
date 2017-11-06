@extends('layouts.master')

@section('title')
    <title>Master Tenaga Ahli - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Master Tenaga Ahli</h1>
            <p>Berikut adalah halaman untuk manajemen data tenaga ahli.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="active">Master Tenaga Ahli</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Daftar Tenaga Ahli</h2>
                    <p>Berikut adalah seluruh data tenaga ahli dalam database.</p>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ route('ta.create') }}" class="btn btn-primary btn-shadowed">
                        <span class="fa fa-plus"></span>&nbsp;&nbsp;
                        Tambah Data Tenaga Ahli
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                
                <table class="table table-striped table-bordered datatable-extended">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Pendidikan</th>
                            <th>Sertifikasi</th>
                        </tr>
                    </thead>                                    
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>                         
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts')    
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
@endsection