@extends('layouts.master')

@section('title')
    <title>Form Data User - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Data User</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data User.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Data User</li>
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
                    <a href="{{ URL::to('/user') }}" class="btn btn-primary btn-shadowed">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data User
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-user" method="POST" action="{{$id==-1 ? URL::to('user') : URL::to('user/'.$id) }}">
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
                                    <label class="col-md-2 control-label">NIP</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nip" class="form-control" placeholder="NIP" data-validation="required"  value="{{$id!=-1 ? $det->nip : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Pangkat</label>
                                    <div class="col-md-10">
                                        <input type="text" name="pangkat" class="form-control" placeholder="Pangkat" data-validation="required"  value="{{$id!=-1 ? $det->pangkat : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Golongan</label>
                                    <div class="col-md-10">
                                        <input type="text" name="golongan" class="form-control" placeholder="Golongan" data-validation="required"  value="{{$id!=-1 ? $det->golongan : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Jabatan</label>
                                    <div class="col-md-10">
                                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" data-validation="required"  value="{{$id!=-1 ? $det->jabatan : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Level</label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="level" data-placeholder="Level" data-validation="required">
                                            <option value=""></option>
                                            @foreach($level as $k => $v)
                                                @if($id!=-1)
                                                    @if($det->level==$k)
                                                        <option value="{{$det->level}}" selected="selected">{{$v}}</option>
                                                    @else
                                                        <option value="{{$k}}">{{$v}}</option>
                                                    @endif
                                                @else
                                                    <option value="{{$k}}">{{$v}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Status</label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="flag_active" data-placeholder="Status User" data-validation="required">
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