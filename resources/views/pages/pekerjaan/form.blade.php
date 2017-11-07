@extends('layouts.master')

@section('title')
    <title>Form Data Kategori Pekerjaan - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Data Kategori Pekerjaan</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data Kategori Pekerjaan.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Data Kategori Pekerjaan</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Data Kategori Pekerjaan</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('/pekerjaan') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Kategori Pekerjaan
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-pekerjaan" method="POST" action="{{$id==-1 ? URL::to('pekerjaan') : URL::to('pekerjaan/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Kategori</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" data-validation="required" value="{{$id!=-1 ? $det->nama_kategori : ''}}">
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