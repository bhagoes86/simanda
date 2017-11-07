@extends('layouts.master')

@section('title')
    <title>Form Data Pokja - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Data Pokja</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data Pokja.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Data Pokja</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Data Pokja</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('/pokja') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Pokja
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-pokja" method="POST" action="{{$id==-1 ? URL::to('pokja') : URL::to('pokja/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Pokja</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nama_pokja" class="form-control" placeholder="Nama Pokja" data-validation="required" value="{{$id!=-1 ? $det->nama_pokja : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Anggota Pokja</label>
                                    <div class="col-md-10">
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Keterangan</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5" name="keterangan">{{$id!=-1 ? $det->keterangan : ''}}</textarea>
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