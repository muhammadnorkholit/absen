<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
    use HasFactory;

    protected $table = "mapel";
    protected $guarded = ['id'];
}
