<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;

    
    protected $table = 'reservas';

    protected $fillable = ['usuario_id','paquete_id','fecha_reserva','num_personas','estado'];
}
