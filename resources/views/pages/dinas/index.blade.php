@extends('layouts.master')

@section('title')
    <title>Master Data Dinas - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Master Data Dinas</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data Dinas.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Master Data Dinas</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Daftar Dinas</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('/dinas-form/-1') }}" class="btn btn-primary btn-shadowed">
                        <span class="fa fa-plus"></span>&nbsp;&nbsp;
                        Tambah Data Dinas
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                <div id="data"></div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts')    
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            loaddata();
            
            var pesan='{{(session('pesan') ? session('pesan') : '' )}}';
            //var pesan='hi';
            if(pesan!='')
            {
                noty({
                    text: "<strong>Informasi</strong>"+pesan,
                    type: 'information',
                    layout: 'topRight',
                    animation: {
                        open: 'animated bounceIn',
                        close: 'animated fadeOut',                    
                        speed: 400
                    },
                    progressBar:true,
                    timeout:3000
                });
            }
        });
        function loaddata()
        {
            $('#data').load(APP_URL+'/dinas-data',function(){
                $('#table-dinas').dataTable();
                if($(".switch").length > 0){
                    $(".switch").each(function(){
                        $(this).append("<span></span>");
                    });
                }
                
            });
        }
        function status(id)
        {
            var val=$('.switch_'+id).val();
            if(val == '0')
            {
                var st=1;
            }
            else
            {
                var st=0;
            }
            $('.switch_'+id).val(st);

            $.ajax({
				dataType: 'json',
				url: APP_URL+'/dinas-status/'+id+'/'+st,    
			}).done(function(data){
				var txt = "Status Data Dinas Berhasil Di Edit";
                noty({
                    text: "<strong>Informasi</strong>"+txt,
                    type: 'information',
                    layout: 'topRight',
                    animation: {
                        open: 'animated bounceIn',
                        close: 'animated fadeOut',                    
                        speed: 400
                    },
                    progressBar:true,
                    timeout:3000
                });
					
			}).fail(function(){
				var txt = "Status Data Dinas Gagal Di Edit";
                noty({
                    text: "<strong>Informasi</strong>"+txt,
                    type: 'error',
                    layout: 'topRight',
                    animation: {
                        open: 'animated bounceIn',
                        close: 'animated fadeOut',                    
                        speed: 400
                    },
                    progressBar:true,
                    timeout:3000
                });
			});
        }

        function edit(id)
        {
            location.href=APP_URL+'/dinas-form/'+id;
        }

        function hapus(id)
        {
            $('#modal-primary-header').text('Peringatan');
            $('#modal-primary-body').html('<h2>Yakin ingin Menghapus Data Dinas Ini??</h2>');
            $('div#modal-primary').modal('show');
            $('#ok').click(function(){
                $.ajax({
                    url: APP_URL+'/dinas/'+id,
                    type : 'DELETE',
                    dataType: 'json',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {"_token": "{{ csrf_token() }}"}
                }).done(function(data){
                    var txt = "Data Dinas Berhasil Di Hapus";
                    noty({
                        text: "<strong>Informasi</strong>"+txt,
                        type: 'information',
                        layout: 'topRight',
                        animation: {
                            open: 'animated bounceIn',
                            close: 'animated fadeOut',                    
                            speed: 400
                        },
                        progressBar:true,
                        timeout:3000
                    });
                    $('div#modal-primary').modal('hide');
                    loaddata();

                }).fail(function(){
                    var txt = " Data Dinas Gagal Di Hapus";
                    noty({
                        text: "<strong>Informasi</strong>"+txt,
                        type: 'error',
                        layout: 'topRight',
                        animation: {
                            open: 'animated bounceIn',
                            close: 'animated fadeOut',                    
                            speed: 400
                        },
                        progressBar:true,
                        timeout:3000
                    });
                    $('div#modal-primary').modal('hide');
                });
            });
        }
    </script>
@endsection