<table class="table table-striped table-bordered datatable-extended" id="table-tenagaahli">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Email</th>
            <th>Pendidikan</th>
            <th>Sertifikasi</th>
            <th>Aksi</th>
        </tr>
    </thead>    
    <tbody>
    @php
        $no=1;
    @endphp
    @foreach($tenagaahli as $k => $v)
        <tr>
            <td>{{$no}}</td>
            <td>{{$v->nama}}</td>
            <td>{{$v->alamat}}</td>
            <td>{{$v->telp}}</td>
            <td>{{$v->email}}</td>
            <td>{{$v->pendidikan}}</td>
            <td>{{$v->sertifikasi}}</td>
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