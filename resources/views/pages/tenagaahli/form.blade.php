@extends('layouts.master')

@section('title')
    <title>Form Data Tenaga Ahli - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Data Tenaga Ahli</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data Tenaga Ahli.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Data Tenaga Ahli</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form User</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('/tenagaahli') }}" class="btn btn-primary btn-shadowed">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Tenaga Ahli
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-tenagaahli" method="POST" action="{{$id==-1 ? URL::to('tenagaahli') : URL::to('tenagaahli/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" data-validation="required" value="{{$id!=-1 ? $det->nama : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Telepon</label>
                                    <div class="col-md-10">
                                        <input type="text" name="telp" class="form-control" placeholder="Telepon" data-validation="required"  value="{{$id!=-1 ? $det->telp : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" name="email" class="form-control" placeholder="Email" data-validation="required,email"  value="{{$id!=-1 ? $det->email : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Pendidikan</label>
                                    <div class="col-md-10">
                                        <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" data-validation="required"  value="{{$id!=-1 ? $det->pendidikan : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Sertifikasi</label>
                                    <div class="col-md-10">
                                        <input type="text" name="sertifikasi" class="form-control" placeholder="Sertifikasi" data-validation="required"  value="{{$id!=-1 ? $det->sertifikasi : ''}}">
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