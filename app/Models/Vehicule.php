<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $table = "vehicules";
    protected $fillable = [
        "id","marque","model","fuelType","registration","photos","clientID"
    ];
    public function client() {
        $this->hasOne(Client::class);
    }
    public function repairs()
    {
        return $this->hasMany(Reparation::class);
    }
}
