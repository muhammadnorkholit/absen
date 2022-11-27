<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Guru extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "guru";
    protected $guard = "guru";

    protected $fillable = ['nama', 'nisn', 'kelas', 'no_kelas', 'id_jurusan'];
}
