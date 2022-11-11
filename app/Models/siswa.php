<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class siswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "siswa";
    protected $guard = "siswa";

    protected $fillable = ['nama', 'nisn', 'kelas', 'no_kelas', 'id_jurusan'];
}
