<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Empleado extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellido', 'dni', 'direccion', 'correo', 'cargo', 'salario', 'estado'];
}
