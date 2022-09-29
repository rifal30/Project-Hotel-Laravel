<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamarModel;

class adminController extends Controller
{
    public function addRoom(Request $request){

        $data=roomModel::create([
            'title'=>$request->title,
            'image'=>$request->image,
            'desc'=>$request->desc,
            'type'=>$request->harga,
        ]);

        if($data){
            return redirect('/superior');
        }
    }

    public function ubahKamarForm($id){
        $kamar=roomModel::findOrFail($id);
        return view('pages.ubahKamar', ['kamar' => $kamar]);
    }

    public function ubahKamar($id, Request $request){
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'harga' => 'required',
        ],
        [
            'title.required'=>'Title tidak boleh kosong',
            'desc.required'=>'Desc tidak boleh kosong',
            'harga.required'=>'Harga tidak boleh kosong',
        ]);

        $bioUpdate=roomModel::findOrFail($id);
        $bioUpdate->title=$request->title;
        $bioUpdate->image=$request->image;
        $bioUpdate->desc=$request->desc;
        $bioUpdate->harga=$request->harga;
        $bioUpdate->save();

        return redirect('/superior');
    }

    public function hapusKamar($id){
        $hapus=roomModel::findOrFail($id);
        $hapus->delete();
        return redirect('/superior');
    }
}