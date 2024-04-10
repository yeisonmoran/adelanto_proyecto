<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerolineas extends Model
{
    use HasFactory;

    protected $table = 'Aerolineas';

    protected $fillable = ['Nombre','Pais','Disponibilidad','Anio_fundacion'];
}
