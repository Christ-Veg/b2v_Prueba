<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Test extends Model
{
    protected $fillable = ['pregunta'];
    protected $table = 'tests';
    use HasFactory;


//RELACION MUCHOS A MUCHOS.
public function users()
{
    return $this->belongsToMany(User::class, 'test_user', 'id_user','id_test');
}
}
