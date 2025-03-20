<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budget extends Model
{
    use HasFactory;

    protected $table = 'budget'; // Explicitly defining table name (optional)

    protected $fillable = [
        'name',
        'limit',
        'saving',
    ];
}
