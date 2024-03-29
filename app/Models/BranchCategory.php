<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchCategory extends Model
{
    use HasFactory;

    protected $table = 'branch_categories';
    protected $fillable = ['name', 'status'];
}
