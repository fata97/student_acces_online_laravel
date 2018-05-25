<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $table = 'kelas';
    public $timestamps = false;
    protected $guarded = [];

    public function guru(){
      return $this->hasOne('App\Models\Guru');
    }
}
