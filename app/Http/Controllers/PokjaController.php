<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pokja;
class PokjaController extends Controller
{
    public function index() {
        return view('pages.pokja.index');
    }

    public function data()
    {
        $pokja=Pokja::orderBy('nama_pokja')->get();
        return view('pages.pokja.data')
            ->with('pokja',$pokja);
    }
    public function form($id=-1)
    {
        $pokja=Pokja::all();
        $det=array();
        if($id!=-1)
        {
            $det=Pokja::find($id);
        }
        return view('pages.pokja.form')
            ->with('id',$id)
            ->with('det',$det)
            ->with('pokja',$pokja);
    }

    public function store(Request $request)
    {
        $create = Pokja::create($request->all());
        // return response()->json($create);
        return redirect('pokja')->with('pesan', 'Data Pokja Berhasil Di Simpan');
    }
    public function update(Request $request,$id)
    {
        $edit = Pokja::find($id)->update($request->all());
        // return response()->json($create);
        return redirect('pokja')->with('pesan', 'Data Pokja Berhasil Di Edit');
    }
    public function destroy($id) {
        Pokja::find($id)->delete();
        return response()->json(['done']);
    }
    public function status($id,$st) {
        $data['flag_active']=$st;
        $edit = Pokja::find($id)->update($data);
        return response()->json(['done']);
    }
}
