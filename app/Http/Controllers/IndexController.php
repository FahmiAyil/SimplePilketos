<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
  public function index()
  {
    return view('suara_rakyat');
  }

  public function hasil()
  {
    // $suara = DB::table('suara_rakyat')->get();
    $suara = DB::table('suara_rakyat')
                 ->select('nik', DB::raw('count(*) as total'))
                 ->groupBy('nik')
                 ->get();
    return view('hasil_suara',['suara' => $suara]);
  }

  public function pilih(Request $request)
  {
    DB::table('suara_rakyat')->insert([
    'nik' => $request->nik
    ]);
    return redirect('/');
  }
}
