<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;

    protected $table='beds';

    protected $fillable=[
        'bed_no',
        'room_id',
        'description'
    ];

    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }
}
