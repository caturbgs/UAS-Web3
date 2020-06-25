<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

    // protected $primaryKey = 'id_guru';

    protected $fillable = [
        'kd_mapel',
        'nama_mapel'
    ];

   public function guru()
   {
       return $this->belongsToMany('App\Role', 'guru_mapel', 'id_mapel', 'id_guru');
   }
}
