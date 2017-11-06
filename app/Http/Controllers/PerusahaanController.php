<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Perusahaan;
class PerusahaanController extends Controller
{
    public function index() {
        return view('pages.perusahaan.index');
    }

    public function data()
    {
        $perusahaan=Perusahaan::orderBy('nama_perusahaan')->get();
        return view('pages.perusahaan.data')
            ->with('perusahaan',$perusahaan);
    }
    public function form($id=-1)
    {
        $perusahaan=Perusahaan::all();
        $det=array();
        if($id!=-1)
        {
            $det=Perusahaan::find($id);
        }
        return view('pages.perusahaan.form')
            ->with('id',$id)
            ->with('det',$det)
            ->with('perusahaan',$perusahaan);
    }

    public function store(Request $request)
    {
        $create = Perusahaan::create($request->all());
        // return response()->json($create);
        return redirect('perusahaan')->with('pesan', 'Data Perusahaan Berhasil Di Simpan');
    }
    public function update(Request $request,$id)
    {
        $edit = Perusahaan::find($id)->update($request->all());
        // return response()->json($create);
        return redirect('perusahaan')->with('pesan', 'Data Perusahaan Berhasil Di Edit');
    }
    public function destroy($id) {
        Perusahaan::find($id)->delete();
        return response()->json(['done']);
    }
    public function status($id,$st) {
        $data['flag_active']=$st;
        $edit = Perusahaan::find($id)->update($data);
        return response()->json(['done']);
    }
}
