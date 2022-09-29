<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomModel;
use App\Models\reservasiModel;

class tamuController extends Controller
{
    public function formPesan($id){
        $card=roomModel::findOrFail($id);
        return view('pages.reservasi', ['card'=>$card]);
    }

    public function index(){
        $card=roomModel::all();
        return view('pages.kamar', ['card'=>$card]);
    }

    public function invoice(){
        $card=reservasiModel::all();
        return view('pages.invoice', ['card'=>$card]);
    }

    public function pesan($id, Request $request){
        $data=reservasiModel::create([
            'nama'=>$request->nama,
            'namakamar'=>$request->namakamar,
            'email'=>$request->email,
            'cekin'=>$request->cekin,
            'cekout'=>$request->cekout,
            'jumlah'=>$request->jumlah,
        ]);

        $decrement=roomModel::findorFail($id)->decrement('jumlah', $request->jumlah);

        if($data){
            return redirect('/kamar');
        }
    }
}