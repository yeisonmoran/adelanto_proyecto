<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
    use HasFactory;

    protected $table = 'Paquetes';

    protected $fillable = ['Nombre','Descripcion','Precio_total','Fecha_salida','Fecha_regreso'];
}
