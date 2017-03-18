<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari dosenController";
	}
	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$dos = new dosen();
		$dos->nama = 'TAHER ALHABSJI, Prof. Dr';
		$dos->NIP = '194204211969021001';
		$dos->Alamat = 'Indonesia';
		$dos->pengguna_id = 1;
		$dos->save();
		return "data dengan username {$dos->nama} telah disimpan";
	}
}
