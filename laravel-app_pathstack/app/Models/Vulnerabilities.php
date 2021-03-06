<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vulnerabilities extends Model
{
    use HasFactory;

    protected $table = 'vulnerabilities';

    protected $fillable = [
        'title',
        'description',
        'ranking',
        'year',
    ];
}
