<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuntoDonacion extends Model
{
    use HasFactory;

    protected $table = 'puntos_donacion';

    protected $primaryKey = 'id_punto';

    protected $fillable = [
        'nombre_punto',
        'longitud',
        'latitud',
    ];
}