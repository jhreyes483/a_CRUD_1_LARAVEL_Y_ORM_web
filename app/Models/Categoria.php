<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_categoria';
    protected $table      = 'categorias';
    protected $fillable   = [
        'nom_categoria',
        'descript'
    ];


    public function productos(){
         return $this->hasMany(Categoria::class);
    }
}
