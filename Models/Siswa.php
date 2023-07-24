<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['Nis','Nama','Jurusan','Angkatan','No wa'];
    protected $table ='Siswa';
    public $timestamps = false;
}