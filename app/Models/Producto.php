<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table      ='productos';
    protected $primaryKey ='id_prod';
    protected $fillable   =[
        'nom',
        'val',
        'estado',
        'stock',
        'descript',
        'img',
    ];


    public function categoria(){
        return $this->belongsTo('App\Models\Categoria', 'id_categoria');
    }

}
