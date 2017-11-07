<table class="table table-striped table-bordered datatable-extended" id="table-pokja">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pokja</th>
            <th>Anggota Pokja</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>    
    <tbody>
    @php
        $no=1;
    @endphp
    @foreach($pokja as $k => $v)
        @php
            $up='';
            if(isset($userpokja[$v->id]))
            {
                $up='<div class="row">';
                foreach($userpokja[$v->id] as $kk => $vv)
                {                                        
                    $up.='<div class="col-lg-1 col-md-2 text-right"><i class="fa fa-remove"></i></div>';
                    $up.='<div class="col-lg-11 col-md-10">'.$user[$kk]->nama.'</div>';
                }
                $up.='</div>';
            }
        @endphp
        <tr>
            <td>{{$no}}</td>
            <td>{{$v->nama_pokja}}</td>
            <td>{!!$up!!}</td>
            <td>{{$v->keterangan}}</td>
            <td>
                <button class="btn btn-xs btn-info" type="button" onclick="edit('{{$v->id}}')">
                    <i class="fa fa-edit"></i>
                </button>
                <button class="btn btn-xs btn-danger" type="button" onclick="hapus('{{$v->id}}')">
                    <i class="fa fa-trash"></i>
                </button>
            </td>
        </tr>  
        @php
            $no++;
        @endphp       
    @endforeach
    </tbody>
</table>