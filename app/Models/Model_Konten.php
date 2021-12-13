<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model_Konten extends Model
{
    use SoftDeletes;
    protected $table='konten';
    protected $fillable=[
        'name',
        'image',
        'link'
    ];
    protected $hidden;
}