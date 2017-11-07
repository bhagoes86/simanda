@extends('layouts.master')

@section('title')
    <title>Form Data Dinas - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Data Dinas</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data Dinas.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Data Dinas</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Dinas</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('/dinas') }}" class="btn btn-primary btn-shadowed">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Dinas
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-dinas" method="POST" action="{{$id==-1 ? URL::to('dinas') : URL::to('dinas/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Dinas</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nama_dinas" class="form-control" placeholder="Nama Dinas" data-validation="required" value="{{$id!=-1 ? $det->nama_dinas : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Singkatan</label>
                                    <div class="col-md-10">
                                        <input type="text" name="singkatan" class="form-control" placeholder="Singkatan" data-validation="required"  value="{{$id!=-1 ? $det->singkatan : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Kepala Dinas</label>
                                    <div class="col-md-10">
                                        <input type="text" name="kepala_dinas" class="form-control" placeholder="Nama Kepala Dinas" data-validation="required"  value="{{$id!=-1 ? $det->kepala_dinas : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Status</label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="flag_active" data-placeholder="Status Dinas" data-validation="required">
                                            <option value=""></option>
                                            <option value="1"  {{$id!=-1 ? ($det->flag_active=='1' ? 'selected="selected"' : '') : ''}}>Aktif</option>
                                            <option value="0" {{$id!=-1 ? ($det->flag_active=='0' ? 'selected="selected"' : '') : ''}}>Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Alamat</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5" name="alamat">{{$id!=-1 ? $det->alamat : ''}}</textarea>
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