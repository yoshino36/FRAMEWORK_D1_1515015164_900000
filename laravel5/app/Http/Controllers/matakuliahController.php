<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;
class matakuliahController extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari matakuliahController";
	}
	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$mkh = new matakuliah();
		$mkh->title = 'Framework';
		$mkh->keterangan = 'web laravel';
		$mkh->save();
		return "data dengan username {$mkh->title} telah disimpan";
	}
}
