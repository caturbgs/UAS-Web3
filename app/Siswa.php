<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nama_siswa',
        'tgl_lahir',
        'jk',
        'alamat',
        'no_telp',
        'foto',
        'id_kelas'
    ];

    protected $dates = ['tgl_lahir', 'created_at', 'updated_at'];

    public function getNamaSiswaAttribute($nama_siswa){
        return ucwords($nama_siswa);
    }

    public function setNamaSiswaAttribute($nama_siswa){
        $this->attributes['nama_siswa'] = strtolower($nama_siswa);
    }

    public function eskul()
    {
        return $this->belongsToMany('App\Eskul', 'siswa_eskul', 'id_siswa', 'id_eskul')->withTimestamps();
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }

}
