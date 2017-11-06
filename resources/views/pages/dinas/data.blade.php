<table class="table table-striped table-bordered datatable-extended" id="table-dinas">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Dinas</th>
            <th>Singkatan</th>
            <th>Kepala Dinas</th>
            <th>Alamat</th>
            <th>Flag</th>
            <th>Aksi</th>
        </tr>
    </thead>    
    <tbody>
    @php
        $no=1;
    @endphp
    @foreach($dinas as $k => $v)
        <tr>
            <td>{{$no}}</td>
            <td>{{$v->nama_dinas}}</td>
            <td>{{$v->singkatan}}</td>
            <td>{{$v->kepala_dinas}}</td>
            <td>{{$v->alamat}}</td>
            <td>
                <label class="switch">
                    <input type="checkbox" name="switch_1" class="switch_{{$v->id}}" onclick="status('{{$v->id}}')" value="{{$v->flag_active}}" {{($v->flag_active=='1' ? 'checked="checked"' : '')}}>
                </label>
            </td>
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