<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

    // protected $primaryKey = 'id_guru';

    protected $fillable = [
        'id_guru',
        'kd_mapel',
        'nama_mapel'
    ];

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'id_guru');
    }

    public function jadwal()
    {
        return $this->belongsToMany('App\Jadwal', 'mapel_jadwal', 'kd_mapel', 'kd_jadwal');
    }
}
