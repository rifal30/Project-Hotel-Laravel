<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Session;

class RgController extends Controller
{
    // public function __construct(){
    //     $this->middleware('check');
    // }
    
    public function index(){
        $bio=User::all();
        return view('register.rgTampil',['bio'=>$bio]);
    }

    public function addData(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'nik' => 'required',
            'tgllahir' => 'required'
        ],
        [
            'name.required'=>'Nama tidak boleh kosong',
            'email.required'=>'Email tidak boleh kosong',
            'password.required'=>'Password tidak boleh kosong',
            'role.required' => 'Jenis Akun tidak boleh kosong',
            'nik.required' => 'NIK tidak boleh kosong',
            'tgllahir.required' => 'Tanggal Lahir tidak boleh kosong',
        ]);

        $data=User::create([
            'name'=>$request->name,
            'image'=>$request->image,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
            'nik'=>$request->nik,
            'tgllahir'=>$request->tgllahir,
        ]);

        if($data){
            Session::flash('sukses', 'Register Data Sukses!');
            return redirect('/lgTampil');
        }
    }

    public function updateData($id){
        $bioUbah=User::findOrFail($id);
        // dd($bioUbah);die();
        return view('register.rgEdit', ['bioUbah' => $bioUbah]);
    }

    public function data($id, Request $request){

        // $request->validate([
        //     'nama' => 'required',
        //     'kelas' => 'required',
        //     'nis' => 'required|unique:rpl2models|max:8|min:8',
        //     'tgl' => 'required'
        // ],
        // [
        //     'nama.required'=>'Nama harus diisi',
        //     'nis.unique'=>'nis sudah diisi',
        //     'kelas.required'=>'Kelas harus diisi',
        //     'nis.required'=>'NIS harus diisi',
        //     'tgl.required'=>'Tanggal harus diisi',
        // ]);

        $bioupdate=User::findOrFail($id);
        $bioupdate->name=$request->name;
        $bioupdate->email=$request->email;
        $bioupdate->nik=$request->nik;
        $bioupdate->tgllahir=$request->tgllahir;
        $bioupdate->save();

        Session::flash('sukses','Update Data Berhasil!');
        return redirect('/rgTampil');
    }

    public function deleteData($idHapus){
        $bioHapus=User::findOrFail($idHapus);
        $bioHapus->delete();
        
        return redirect('/rgTampil')->with('sukses','Berhasil Menghapus Data!');
    }

    public function searchReg(Request $request){
        $searchResult = $request->search;
        $result=User::where('nama','like',"%".$searchResult."%")->paginate();
        return view('register.rgSearch',['bio' => $result]);
    }
}
