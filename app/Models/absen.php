<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\absen as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class absen extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "absen";
    protected $guard = "absen";

    protected $fillable = [];
}
