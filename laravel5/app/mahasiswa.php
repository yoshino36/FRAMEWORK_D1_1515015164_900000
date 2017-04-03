<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';
    
    public function pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    }
}
