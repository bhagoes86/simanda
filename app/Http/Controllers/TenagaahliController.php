<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tenagaahli;
class TenagaahliController extends Controller
{
    public function index() {
        return view('pages.tenagaahli.index');
    }

    public function data()
    {
        $level = config('services.id_level');
        $tenagaahli=Tenagaahli::orderBy('nama')->get();
        return view('pages.tenagaahli.data')
            ->with('level',$level)
            ->with('tenagaahli',$tenagaahli);
    }
    public function form($id=-1)
    {
        $tenagaahli=Tenagaahli::all();
         $level = config('services.id_level');
        $det=array();
        if($id!=-1)
        {
            $det=Tenagaahli::find($id);
        }
        return view('pages.tenagaahli.form')
            ->with('id',$id)
            ->with('det',$det)
            ->with('level',$level)
            ->with('tenagaahli',$tenagaahli);
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $create = Tenagaahli::create($data);
        // return response()->json($create);
        return redirect('tenagaahli')->with('pesan', 'Data Tenaga Ahli Berhasil Di Simpan');
    }
    public function update(Request $request,$id)
    {
        $edit = Tenagaahli::find($id)->update($request->all());
        // return response()->json($create);
        return redirect('tenagaahli')->with('pesan', 'Data Tenaga Ahli Berhasil Di Edit');
    }
    public function destroy($id) {
        Tenagaahli::find($id)->delete();
        return response()->json(['done']);
    }
    public function status($id,$st) {
        $data['flag_active']=$st;
        $edit = Tenagaahli::find($id)->update($data);
        return response()->json(['done']);
    }
}
