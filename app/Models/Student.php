<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $guarded = [
        'id_students'
    ];

    protected $fillable = [
        'name', 'nim', 'photo', 'jurusan', 'alamat', 'tahun_masuk', 'no_telp',
        'deskripsi', 'token'
    ];

}
