<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_inicio', 'fecha_fin', 'usuario', 'descripcion'];

    public function tareas()
    {
        return $this->belongsTo(Tarea::class);
    }
}