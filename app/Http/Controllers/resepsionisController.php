<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservasiModel;

class resepsionisController extends Controller
{
    public function reservation(){
        $list = reservasiModel::all();
        return view('pages.dataReservasi', ['list'=>$list]);
    }

    public function search(Request $request){
        $searchResult = $request->search;
        $result=reservasiModel::where('nama','like',"%".$searchResult."%")->paginate();
        return view('pages.dataReservasi',['list' => $result]);
    }

    public function searchDate(Request $request){
        $searchResult = $request->searchDate;
        $result=reservasiModel::where('cekin', $searchResult)->paginate();
        return view('pages.dataReservasi',['list' => $result]);
    }

}