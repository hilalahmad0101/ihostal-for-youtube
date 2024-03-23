<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memeber extends Model
{
    use HasFactory;


    protected $table = 'memebers';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'date_of_birth',
        'gender',
        'institute',
        'religion',
        'address',
        'guardian_name',
        'guardian_phone',
        'username',
    ];
}
