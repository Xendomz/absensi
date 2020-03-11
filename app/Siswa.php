<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JurusanSeeder;

class Siswa extends Model
{
    protected $fillable = ['name', 'alamat', 'tanggal_lahir', 'jenkel', 'class_id', 'jurusan_id'];

    public function class()
    {
        return $this->belongsTo(ClassUser::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function absen()
    {
        return $this->hasOne(Absensi::class);
    }
}
