<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Talent extends Model
{
    use HasFactory, Searchable;

    protected $table = 'talents';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'kategori', 'nama_bakat'
    ]; 

    public function toSearchableArray()
{
    return [
        'kategori' => $this->kategori,
        'nama_bakat' => $this->nama_bakat,
    ];
}
}
