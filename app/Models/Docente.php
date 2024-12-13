<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';

    protected $fillable = [
        'identificacion',
        'nombre',
        'area',
        'id_institucion'
    ];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'id_institucion');
    }
}
