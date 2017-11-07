@extends('layouts.master')

@section('title')
    <title>Master Data Kategori Pekerjaan - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Master Data Kategori Pekerjaan</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data Kategori Pekerjaan.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Master Data Kategori Pekerjaan</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Daftar Data Kategori Pekerjaan</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('/pekerjaan-form/-1') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-plus"></span>&nbsp;&nbsp;
                        Tambah Data Kategori Pekerjaan
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                <div id="data"></div>
            </div>
        </div>
    </div>
    <style>
    table td
    {
        padding:5px !important;
    }
    </style>
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
            $('#data').load(APP_URL+'/pekerjaan-data',function(){
                $('#table-pekerjaan').dataTable();
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
				url: APP_URL+'/pekerjaan-status/'+id+'/'+st,    
			}).done(function(data){
				var txt = "Status Data Kategori Pekerjaan Berhasil Di Edit";
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
				var txt = "Status Data Kategori Pekerjaan Gagal Di Edit";
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
            location.href=APP_URL+'/pekerjaan-form/'+id;
        }

        function hapus(id)
        {
            $('#modal-primary-header').text('Peringatan');
            $('#modal-primary-body').html('<h2>Yakin ingin Menghapus Data Kategori Pekerjaan Ini??</h2>');
            $('div#modal-primary').modal('show');
            $('#ok').click(function(){
                $.ajax({
                    url: APP_URL+'/pekerjaan/'+id,
                    type : 'DELETE',
                    dataType: 'json',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {"_token": "{{ csrf_token() }}"}
                }).done(function(data){
                    var txt = "Data Kategori Pekerjaan Berhasil Di Hapus";
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
                    var txt = " Data Kategori Pekerjaan Gagal Di Hapus";
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
