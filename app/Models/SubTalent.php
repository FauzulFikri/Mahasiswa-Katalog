<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTalent extends Model
{
    use HasFactory;
    protected $table = 'sub_talent';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'nama_bakat', 'id_kategori'
    ]; 
}
