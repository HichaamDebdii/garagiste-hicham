<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reparation extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'statu',
        'startDate',
        'endDate',
        'mechanicNotes',
        'clientNotes',
        'mechanicID',
        'vehiculeID',
    ];
    protected $table = 'reparations';
}
