<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkWithUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'birth',
        'email',
        'telephone',
        'inquiry'
    ];
}
