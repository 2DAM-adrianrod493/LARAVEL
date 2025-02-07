<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'dificultad', 'estado', 'duracion', 'proyecto_id'];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
