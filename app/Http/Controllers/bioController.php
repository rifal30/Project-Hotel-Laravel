<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rpl2Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Session;

class bioController extends Controller
{

    // public function __construct(){
    //     $this->middleware('check');
    // }
    public function index(){

        $bio=rpl2model::all();
        return view('pages.tampil',['bio'=>$bio]);
    }
    public function profile(){
        return view('pages.profile',[
            "biodata"=>User::where('name', Auth::user()->name)->firstOrFail()
        ]);
    }

    // public function join(){
    //     return DB::table('users')
    //     ->join('rpl2models','users.nama',"=",'rpl2models.nama')
    //     ->select('rpl2models.nama','users.email','rpl2models.nis','rpl2models.kelas','rpl2models.tgl')
    //     ->get();
    // }

    public function simpanData(Request $request){
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

        $data=rpl2model::create([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'nis'=>$request->nis,
            'tgl'=>$request->tgl,
        ]);

        if($data){
            Session::flash('sukses','Tambah data sukses!');
            return redirect('/input');
        }
        // dd($data);
    }

    public function ubah($id){
        $bioUbah=rpl2Model::findOrFail($id);
        // dd($bioUbah);die();
        return view('pages.ubah', ['bioUbah' => $bioUbah]);
    }

    public function data($id, Request $request){

        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required|unique:rpl2models|max:8|min:8',
            'tgl' => 'required'
        ],
        [
            'nama.required'=>'Nama harus diisi',
            'nis.unique'=>'nis sudah diisi',
            'kelas.required'=>'Kelas harus diisi',
            'nis.required'=>'NIS harus diisi',
            'tgl.required'=>'Tanggal harus diisi',
        ]);

        $bioupdate=rpl2model::findOrFail($id);
        $bioupdate->nama=$request->nama;
        $bioupdate->kelas=$request->kelas;
        $bioupdate->nis=$request->nis;
        $bioupdate->tgl=$request->tgl;
        $bioupdate->save();

        Session::flash('sukses','Updata Data Berhasil!');
        return redirect('/tampil');
    }

    public function hapusData($idHapus){
        $bioHapus=rpl2model::findOrFail($idHapus);
        $bioHapus->delete();
        
        return redirect('/rgTampil')->with('sukses','Berhasil Menghapus Data!');
    }

    public function search(Request $request){
        $searchResult = $request->search;
        $result=rpl2model::where('nama','like',"%".$searchResult."%")->paginate();
        return view('pages.search',['bio' => $result]);
    }
}
