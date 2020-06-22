<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'kd_jadwal',
        'hari',
        'jam'
    ];

    public function mapel()
    {
        return $this->belongsToMany('App\Mapel', 'mapel_jadwal', 'kd_jadwal', 'kd_mapel');
    }
}
