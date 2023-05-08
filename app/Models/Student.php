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
        'name', 'no_pengenal', 'photo', 'no_telp',
        'deskripsi', 'token'
    ];

}
