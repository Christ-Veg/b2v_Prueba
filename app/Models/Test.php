<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['pregunta','respuesta'];
    protected $table = 'tests';
    use HasFactory;
}
