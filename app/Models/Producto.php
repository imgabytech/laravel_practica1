<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;   
	protected $fillable = [
		'nombre_prod', 'codigo_prod', 'precio_prod','stock_prod'];  
	protected $hidden =[
		'id','created_at','updated_at'
	];	  

    /*public function obtenerProductos(){
    return Producto::all();
	}*/

	/*public function obtenerProductoPorId($id){
    return Producto::find($id);
	}*/
}
