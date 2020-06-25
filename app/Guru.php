<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nip',
        'nama_guru',
        'tgl_lahir',
        'jk',
        'alamat',
        'no_telp',
        'foto',
        'email'
    ];

    protected $dates = ['tgl_lahir', 'created_at', 'updated_at'];

    public function jabatan()
    {
        return $this->hasOne('App\Jabatan', 'id_guru');
    }

    public function mapel()
    {
        return $this->belongsToMany('App\Mapel', 'guru_mapel', 'id_guru', 'id_mapel');
    }
}
