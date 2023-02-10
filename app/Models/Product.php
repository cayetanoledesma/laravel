<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table= "products";

    protected $filable = ['name', 'description', 'quantity', 'status', 'seller_id'];

    protected $hidden = ['id'];

    public function obtenerProductos(){
        return Product::all();
    }

    public function obtenerProductosPorId($id){
        return Product::find($id); //esto nos devolveria un alumno igual al parametro 

    }
   
}
