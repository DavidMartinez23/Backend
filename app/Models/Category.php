<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'category';

    // Campos que pueden ser asignados masivamente
    protected $fillable = ['name', 'description'];

    // Si deseas cambiar la clave primaria, puedes hacerlo aquí
    protected $primaryKey = 'id';

    // Si deseas establecer el tipo de la clave primaria (por ejemplo, si no es 'int'), puedes especificarlo aquí
    // protected $keyType = 'string';
}