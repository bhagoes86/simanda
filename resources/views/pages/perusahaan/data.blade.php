<table class="table table-striped table-bordered datatable-extended" id="table-perusahaan">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Nama Pimpinan</th>
            <th>Sertifikasi</th>
            <th>Alamat</th>
            <th>Kontak</th>
            <th>Nomor SIUP</th>
            <th>Jenis SIUP</th>
            <th>Flag</th>
            <th>Aksi</th>
        </tr>
    </thead>    
    <tbody>
    @php
        $no=1;
    @endphp
    @foreach($perusahaan as $k => $v)
        <tr>
            <td>{{$no}}</td>
            <td>{{$v->nama_perusahaan}}</td>
            <td>{{$v->nama_pimpinan}}</td>
            <td>{{$v->sertifikasi}}</td>
            <td>{{$v->alamat}}</td>
            <td>Telp : {{$v->telp}}<br>Email : {{$v->email}}</td>
            <td>{{$v->nomor_siup}}</td>
            <td>{{($v->flag_jenis_siup==1 ? 'SIUP Kecil' : 'Non Kecil')}}</td>
            <td>
                <label class="switch">
                    <input type="checkbox" name="switch_1" class="switch_{{$v->id}}" onclick="status('{{$v->id}}')" value="{{$v->flag_active}}" {{($v->flag_active=='1' ? 'checked="checked"' : '')}}>
                </label>
            </td>
            <td style="width:100px !important;">
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