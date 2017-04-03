<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    //
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
   public function mahasiswa(){
	return $this->belongsTo(Mahasiswa::class); 
}
	public function ruangan(){
	return $this->BelongsTo(Ruangan::class);
	}	
	public function dosen_matakuliah(){
	return $this->BelongsTo(dosen_matakuliah::class); 
}
