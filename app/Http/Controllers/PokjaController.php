<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pokja;
use App\Model\Users;
use App\Model\UsersPokja;
class PokjaController extends Controller
{
    public function index() {
        return view('pages.pokja.index');
    }

    public function data()
    {
        $user=Users::where('level','=',4)->get();
        $userpokja=UsersPokja::where('flag_active','=','1')->get();
        $up=array();
        foreach($userpokja as $k => $v)
        {
            $up[$v->id_pokja][$v->id_user]=$v;
        }

        $us=array();
        foreach($user as $k => $v)
        {
            $us[$v->id]=$v;
        }
        $pokja=Pokja::orderBy('nama_pokja')->get();
        return view('pages.pokja.data')
            ->with('user',$us)
            ->with('userpokja',$up)
            ->with('pokja',$pokja);
    }
    public function form($id=-1)
    {
        $user=Users::where('level','=',4)->get();
        $userpokja=UsersPokja::where('flag_active','=','1')->get();
        
        $up=$upkj=array();
        foreach($userpokja as $k => $v)
        {
            $up[$v->id_pokja][$v->id_user]=$v;
            $upkj[$v->id_user]=$v;
        }

        $us=array();
        foreach($user as $k => $v)
        {
            $us[$v->id]=$v;
        }
        $pokja=Pokja::all();
        $upk=array();
        $det=array();
        if($id!=-1)
        {
            $det=Pokja::find($id);
            if(isset($up[$id]))
            {

                $u_pok=$up[$id];
                if(count($u_pok)!=0)
                {
                    foreach($u_pok as $kp => $vp)
                    {
                        $upk[$kp]=$vp;
                    }
                }
            }
        }
        return view('pages.pokja.form')
            ->with('id',$id)
            ->with('det',$det)
            ->with('user',$us)
            ->with('userpokja',$up)
            ->with('upk',$upk)
            ->with('upkj',$upkj)
            ->with('pokja',$pokja);
    }

    public function store(Request $request)
    {
        
        $create = Pokja::create($request->all());
        // return response()->json($create);
        $user=$request->input('user');
        if(count($user)!=0)
        {
            $dt=array();
            $x=0;
            foreach($user as $k => $v)
            {
                $dt[$x]['id_pokja']=$create->id;
                $dt[$x]['id_user']=$v;
                $dt[$x]['flag_active']='1';
                $dt[$x]['created_at']=date('Y-m-d H:i:s');
                $dt[$x]['updated_at']=date('Y-m-d H:i:s');
                $x++;
            }
            UsersPokja::insert($dt);
        }

        return redirect('pokja')->with('pesan', 'Data Pokja Berhasil Di Simpan');
    }
    public function update(Request $request,$id)
    {
        $edit = Pokja::find($id)->update($request->all());

        $user=$request->input('user');
        if(count($user)!=0)
        {
            $dt=array();
            $x=0;
            foreach($user as $k => $v)
            {
                $dt[$x]['id_pokja']=$id;
                $dt[$x]['id_user']=$v;
                $dt[$x]['flag_active']='1';
                $dt[$x]['created_at']=date('Y-m-d H:i:s');
                $dt[$x]['updated_at']=date('Y-m-d H:i:s');
                $x++;
            }
            UsersPokja::insert($dt);
        }
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
