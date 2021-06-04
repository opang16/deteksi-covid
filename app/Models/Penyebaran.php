<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyebaran extends Model
{
    protected $fillable = ['positif', 'sembuh', 'meninggal',];
    protected $table = 'penyebaran';
}
