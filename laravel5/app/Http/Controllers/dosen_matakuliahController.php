<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;
class dosen_matakuliahController extends Controller
{
    //
    public function awal()
    {
    	return view('dosen_matakuliah.awal',['data'=>dosen_matakuliah::all()]);
	}
	 public function lihat($id)
    {
        $dm = dosen_matakuliah::find($id);
        return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dm));
}
}