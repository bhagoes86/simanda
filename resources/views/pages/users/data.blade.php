<table class="table table-striped table-bordered datatable-extended" id="table-dinas">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Golongan</th>
            <th>Jabatan</th>
            <th>Level</th>
            <th>Flag</th>
            <th>Aksi</th>
        </tr>
    </thead>    
    <tbody>
    @php
        $no=1;
    @endphp
    @foreach($user as $k => $v)
        <tr>
            <td>{{$no}}</td>
            <td>{{$v->nip}}</td>
            <td>{{$v->nama}}</td>
            <td>{{$v->pangkat}}</td>
            <td>{{$v->golongan}}</td>
            <td>{{$v->jabatan}}</td>
            <td>{{isset($level[$v->level]) ? $level[$v->level] : ''}}</td>
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