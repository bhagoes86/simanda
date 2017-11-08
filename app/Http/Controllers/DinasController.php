<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Dinas;

class DinasController extends Controller
{

    public function index() {
        return view('pages.dinas.index');
    }

    public function data()
    {
        $dinas=Dinas::orderBy('nama_dinas')->get();
        return view('pages.dinas.data')
            ->with('dinas',$dinas);
    }
    public function form($id=-1)
    {
        $dinas=Dinas::all();
        $det=array();
        if($id!=-1)
        {
            $det=Dinas::find($id);
        }
        return view('pages.dinas.form')
            ->with('id',$id)
            ->with('det',$det)
            ->with('dinas',$dinas);
    }

    public function store(Request $request)
    {
        $create = Dinas::create($request->all());
        // return response()->json($create);
        return redirect('dinas')->with('pesan', 'Data Dinas Berhasil Di Simpan');
    }
    public function update(Request $request,$id)
    {
        $edit = Dinas::find($id)->update($request->all());
        // return response()->json($create);
        return redirect('dinas')->with('pesan', 'Data Dinas Berhasil Di Edit');
    }
    public function destroy($id) {
        Dinas::find($id)->delete();
        return response()->json(['done']);
    }
    public function status($id,$st) {
        $data['flag_active']=$st;
        $edit = Dinas::find($id)->update($data);
        return response()->json(['done']);
    }
}
