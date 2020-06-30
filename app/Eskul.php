<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = 'eskul';

    protected $fillable = ['nama_eskul'];

    public function siswa()
    {
        return $this->belongsToMany('App\Siswa', 'siswa_eskul', 'id_eskul', 'id_siswa');
    }
}
