<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';

    protected $fillable = [
        'nama_jabatan'
    ];

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'id_guru');
    }
}
