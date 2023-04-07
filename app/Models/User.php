<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Searchable;

    protected $table = 'users';

    protected $guarded = [
        'id'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'nim', 'photo', 'jurusan', 'alamat', 'tahun_masuk',
        'no_telp', 'deskripsi', 'token'
    ];

    public function toSearchableArray()
        {
            return [
                'name' => $this->name,
                'nim' => $this->nim,
                'jurusan' => $this->jurusan,
                'tahun_masuk' => $this->tahun_masuk,
                'no_telp' => $this->no_telp,
                'deskripsi' => $this->deskripsi,
            ];
        }

}
