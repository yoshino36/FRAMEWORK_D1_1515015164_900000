<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
class jadwal_matakuliahController extends Controller
{
    //
    public function awal()
    {
    	return view('jadwal_matakuliah.awal',['data'=>jadwal_matakuliah::all()]);
	}
	public function lihat($id)
    {
        $matakuliah = matakuliah::find($id);
        return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$matakuliah));
    }
}
