<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Receta extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'instrucciones',
        'tiempo_cocinado',
        'dificultad',
        'categoria_id'
    ];

    // Para indicar que la receta pertenece a una categoría
    public function categoria(): BelongsTo{
        return $this->belognsTo(Categoria::class);
    }
}
