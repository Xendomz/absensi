<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassUser extends Model
{
    protected $table = 'class';

    public function user()
    {
        return $this->hasOne(Siswa::class);
    }
}
