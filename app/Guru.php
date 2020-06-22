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
        'email',
        'jabatan'
    ];

    public function mapel()
    {
        return $this->hasOne('App\Mapel', 'id_guru');
    }
}
