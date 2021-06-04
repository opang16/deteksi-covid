<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puskesmas extends Model
{
    protected $fillable = ['name', 'alamat', 'no_telepon', 'email'];
    protected $table = 'puskesmas';
}
