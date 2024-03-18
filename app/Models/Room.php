<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'room_no',
        'room_category_id',
        'description',
        'room_charge'
    ];


    public function category(){
        return $this->belongsTo(RoomCategory::class,'room_category_id');
    }
}
