<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';

    protected $primaryKey = 'id_guru';

    protected $fillable = [
        'id_guru',
        'nama_jabatan'
    ];

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'id_guru');
    }
}
