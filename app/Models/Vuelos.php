<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    use HasFactory;
    protected $table = 'Vuelos';

    protected $fillable = ['origen','destino','fecha_salida','fecha_llegada','duracion','precio','asientos_disponibles'];
}
