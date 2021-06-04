<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wismaatlet extends Model
{
    protected $fillable = ['name', 'alamat', 'no_telepon', 'email'];
    protected $table = 'wisma_atlet';
}
