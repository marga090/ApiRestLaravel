<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $table = 'participantes'; // Asegúrate de que el nombre de la tabla es correcto

    protected $fillable = [
        'nombre',
        'apellidos',
        'fecha_nacimiento',
        'club',
        'email',
        'dni',
        'telefono'
    ];
}
