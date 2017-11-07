<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Users;

use Auth;

class UserController extends Controller
{
    public function index() {
        return view('pages.users.index');
    }

    public function data()
    {
        $level = config('services.id_level');
        $user=Users::orderBy('nama')->get();
        return view('pages.users.data')
            ->with('level',$level)
            ->with('user',$user);
    }

    public function form($id=-1)
    {
        $user=Users::all();
         $level = config('services.id_level');
        $det=array();
        if($id!=-1)
        {
            $det=Users::find($id);
        }
        return view('pages.users.form')
            ->with('id',$id)
            ->with('det',$det)
            ->with('level',$level)
            ->with('user',$user);
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $data['password']=bcrypt($request->input('nip'));
        $create = Users::create($data);
        // return response()->json($create);
        return redirect('user')->with('pesan', 'Data User Berhasil Di Simpan');
    }

    public function update(Request $request,$id)
    {
        $edit = Users::find($id)->update($request->all());
        // return response()->json($create);
        return redirect('user')->with('pesan', 'Data User Berhasil Di Edit');
    }

    public function destroy($id) {
        Users::find($id)->delete();
        return response()->json(['done']);
    }

    public function status($id,$st) {
        $data['flag_active']=$st;
        $edit = Users::find($id)->update($data);
        return response()->json(['done']);
    }

    public function performLogout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
}
