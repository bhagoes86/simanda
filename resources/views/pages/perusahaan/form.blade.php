@extends('layouts.master')

@section('title')
    <title>Form Data Perusahaan - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Data Perusahaan</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data Perusahaan.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Data Perusahaan</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Data Perusahaan</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('/perusahaan') }}" class="btn btn-primary btn-shadowed">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Perusahaan
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-perusahaan" method="POST" action="{{$id==-1 ? URL::to('perusahaan') : URL::to('perusahaan/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Perusahaan</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" data-validation="required" value="{{$id!=-1 ? $det->nama_perusahaan : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Pimpinan</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nama_pimpinan" class="form-control" placeholder="Nama Pimpinan" data-validation="required"  value="{{$id!=-1 ? $det->nama_pimpinan : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Sertifikasi</label>
                                    <div class="col-md-10">
                                        <input type="text" name="sertifikasi" class="form-control" placeholder="Sertifikasi" data-validation="required"  value="{{$id!=-1 ? $det->sertifikasi : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nomor SIUP</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nomor_siup" class="form-control" placeholder="Nomor SIUP" data-validation="required"  value="{{$id!=-1 ? $det->nomor_siup : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Jenis SIUP</label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="flag_jenis_siup" data-placeholder="Jenis SIUP" data-validation="required">
                                            <option value=""></option>
                                            <option value="1"  {{$id!=-1 ? ($det->flag_active=='1' ? 'selected="selected"' : '') : ''}}>SIUP Kecil</option>
                                            <option value="2" {{$id!=-1 ? ($det->flag_active=='2' ? 'selected="selected"' : '') : ''}}>Non Kecil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Alamat</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5" name="alamat">{{$id!=-1 ? $det->alamat : ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Telepon</label>
                                    <div class="col-md-5">
                                        <input type="text" name="telp" class="form-control" placeholder="Telepon" data-validation="required"  value="{{$id!=-1 ? $det->telp : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Email</label>
                                    <div class="col-md-5">
                                        <input type="text" name="email" class="form-control" placeholder="Email" data-validation="required"  value="{{$id!=-1 ? $det->email : ''}}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Status</label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="flag_active" data-placeholder="Status Perusahaan" data-validation="required">
                                            <option value=""></option>
                                            <option value="1"  {{$id!=-1 ? ($det->flag_active=='1' ? 'selected="selected"' : '') : ''}}>Aktif</option>
                                            <option value="0" {{$id!=-1 ? ($det->flag_active=='0' ? 'selected="selected"' : '') : ''}}>Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="text-right">
  									<button type="submit" class="btn btn-primary">Simpan <i class="icon-arrow-right14 position-right"></i></button>
  								</div>
                </form>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts')    
    <script>
        $(document).ready(function(){
            
        });

        $.validate({
                modules : 'date,file,location',
                onValidate: function(){
                    
                    delayBeforeFire(function(){                                                
                        app.spy();
                    },100);
                                        
                }
            });
    </script>
@endsection