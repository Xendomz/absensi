<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }
}
