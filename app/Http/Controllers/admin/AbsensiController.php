<?php

namespace App\Http\Controllers\admin;

use App\Absensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function firstClass()
    {
        $siswas = Siswa::where('class_id',1)->get('id');
        foreach ($siswas as $siswa){
            $firstClass[] = $siswa->id;
        }

        return $firstClass;
    }

    public function seccondClass()
    {
        $siswas = Siswa::where('class_id',2)->get('id');
        foreach ($siswas as $siswa) {
            $seccondClass[] = $siswa->id;
        }

        return $seccondClass;
    }

    public function thirdClass()
    {
        $siswas = Siswa::where('class_id',3)->get('id');
        foreach ($siswas as $siswa) {
            $thirdClass[] = $siswa->id;
        }

        return $thirdClass;
    }

    public function index()
    {

        $class_1 = Absensi::whereIn('siswa_id',$this->firstClass())->where('tanggal',Carbon::now()->format('Y-m-d'))->get();
        $class_2 = Absensi::whereIn('siswa_id',$this->seccondClass())->where('tanggal',Carbon::now()->format('Y-m-d'))->get();
        $class_3 = Absensi::whereIn('siswa_id',$this->thirdClass())->where('tanggal',Carbon::now()->format('Y-m-d'))->get();
        // dd($class_1);
        return view('admin.absensi.index',compact('class_1','class_2','class_3'));
    }

    public function history()
    {

        $class_1 = Absensi::whereIn('siswa_id',$this->firstClass())->where('tanggal','!=',Carbon::now()->format('Y-m-d'))->get();
        $class_2 = Absensi::whereIn('siswa_id',$this->seccondClass())->where('tanggal','!=',Carbon::now()->format('Y-m-d'))->get();
        $class_3 = Absensi::whereIn('siswa_id',$this->thirdClass())->where('tanggal','!=',Carbon::now()->format('Y-m-d'))->get();
        // dd($class_2);
        return view('admin.absensi.history',compact('class_1','class_2','class_3'));
    }


}
