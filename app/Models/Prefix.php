<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefix extends Model
{
    protected $fillable = [
        'prefixe_name',
        'status',
        'created_by',
        'updated_by',
    ];
}
