<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'partName',
        'partReference',
        'supplier',
        'price',
    ];
    protected $table = 'stocks';
}
