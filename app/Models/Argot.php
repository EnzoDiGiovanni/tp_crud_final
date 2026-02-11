<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Argot extends Model
{
    /** @use HasFactory<\Database\Factories\App\Models\ArgotFactory> */
    use HasFactory;

    protected $fillable = ['mot', 'decenie', 'signification', 'actuel', 'ville'];
}
