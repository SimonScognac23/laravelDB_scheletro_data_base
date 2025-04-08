<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model  // estendono la classe genitore Model
{
    use HasFactory;




    // Laravel usa un tipo di proprietà detto fillable, ovvero quello che andrà riempito
    // il fillable va definito protected 

    // Questa proprietà definisce i campi del mio modello, di base è un array e dentro andremo a inserire i nomi dei campi
    protected $fillable = [  
        'name',
        'description',
        'price'  // nomi dei campi del database
    ];



}
