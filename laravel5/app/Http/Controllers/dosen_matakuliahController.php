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
    	return "Hello dari dosen_matakuliahController";
	}
	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$dm = new dosen_matakuliah();
		$dm->dosen_id = '7';
		$dm->matakuliah_id = '1';
		$dm->save();
		return "data telah disimpan";
	}
}
