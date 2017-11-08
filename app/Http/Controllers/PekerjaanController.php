<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pekerjaan;
class PekerjaanController extends Controller
{
    
    public function index() {
        return view('pages.pekerjaan.index');
    }

    public function data()
    {
        $pekerjaan=Pekerjaan::orderBy('nama_kategori')->get();
        return view('pages.pekerjaan.data')
            ->with('pekerjaan',$pekerjaan);
    }
    public function form($id=-1)
    {
        $pekerjaan=Pekerjaan::all();
        $det=array();
        if($id!=-1)
        {
            $det=Pekerjaan::find($id);
        }
        return view('pages.pekerjaan.form')
            ->with('id',$id)
            ->with('det',$det)
            ->with('pekerjaan',$pekerjaan);
    }

    public function store(Request $request)
    {
        $create = Pekerjaan::create($request->all());
        // return response()->json($create);
        return redirect('pekerjaan')->with('pesan', 'Data Pekerjaan Berhasil Di Simpan');
    }
    public function update(Request $request,$id)
    {
        $edit = Pekerjaan::find($id)->update($request->all());
        // return response()->json($create);
        return redirect('pekerjaan')->with('pesan', 'Data Pekerjaan Berhasil Di Edit');
    }
    public function destroy($id) {
        Pekerjaan::find($id)->delete();
        return response()->json(['done']);
    }
    public function status($id,$st) {
        $data['flag_active']=$st;
        $edit = Pekerjaan::find($id)->update($data);
        return response()->json(['done']);
    }
}
