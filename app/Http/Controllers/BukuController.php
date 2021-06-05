<?php

namespace App\Http\Controllers;

use App\Models\buku;
use DB;
use Illuminate\Http\Request;

class BukuController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('rak_buku')
        ->join('buku','buku.id','=','rak_buku.id_buku')
        ->join('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku')
        ->get();
        return view('buku0002', ['buku'=>$buku]);
    }
}