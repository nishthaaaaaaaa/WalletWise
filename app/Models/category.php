<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Explicitly defining table name (optional)

    protected $fillable = [
        'name',
        'type',
    ];
}
