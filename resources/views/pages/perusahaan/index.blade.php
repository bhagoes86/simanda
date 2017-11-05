@extends('layouts.master')

@section('title')
    <title>Master Perusahaan - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Master Perusahaan</h1>
            <p>Berikut adalah halaman untuk manajemen data perusahaan.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Master Perusahaan</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Daftar Perusahaan</h2>
                    <p>Berikut adalah seluruh data perusahaan dalam database.</p>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ route('perusahaan.create') }}" class="btn btn-primary btn-shadowed">
                        <span class="fa fa-plus"></span>&nbsp;&nbsp;
                        Tambah Data Perusahaan
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                
                <table class="table table-striped table-bordered datatable-extended">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor SIUP</th>
                            <th>Jenis SIUP</th>
                            <th>Sertifikasi</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Aksi</th>
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
                            <td>$320,800</td>
                            <td>$320,800</td>
                        </tr>                         
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->

    {{--  <div class="modal fade" id="modal-primary" tabindex="-1" role="dialog" aria-labelledby="modal-primary-header">                        
        <div class="modal-dialog modal-primary" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

            <div class="modal-content">
                <div class="modal-header">                        
                    <h4 class="modal-title" id="modal-primary-header">
                        Tambah Data perusahaan
                    </h4>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input name="nama" class="form-control" type="text" placeholder="Nama Perusahaan">
                        </div>
                        <div class="form-group">
                            <label>Nomor SIUP</label>
                            <input name="nomor_siup" class="form-control" type="text" placeholder="Nomor SIUP">
                        </div>
                        <div class="form-group">
                            <label>Jenis SIUP</label>
                            <select name="jenis_siup" class="form-control">
                                <option value="Kecil">Kecil</option>
                                <option value="Non Kecil">Non Kecil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat Perusahaan</label>
                            <textarea name="alamat" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Telepon Perusahaan</label>
                            <input name="nomor_siup" class="form-control" type="text" placeholder="Nomor SIUP">
                        </div>
                        <div class="form-group">
                            <label>Email Perusahaan</label>
                            <input name="nomor_siup" class="form-control" type="text" placeholder="Nomor SIUP">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>            
    </div>  --}}

@endsection

@section('pagescripts')    
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
@endsection