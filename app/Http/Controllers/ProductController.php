<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{




    
    public function store(Request $request)
    {
        // $request è l'oggetto che io definisco attraverso la classe Request
        // avrà il compito di recuperare le informazioni attraverso i nomi
        // che abbiamo dato attraverso il campo input

        // quello scritto sopra può essere scritto anche così  ---> $name = $request->input('name');
        // recuperiamo i dati del form
        $name = $request->name;     
        $description = $request->description;
        $price = $request->price;







        //////////////////// Metodo salvare dati DB 1  ////////////////////////////////////////////////////////////////////////////////

        // creo un nuovo oggetto di classe Product, per salvarlo nel database
        $product = new Product();

        // ora devo valorizzare i campi dell'oggetto $product
        $product->name = $name; 
        // $product alla proprietà 'name' è uguale a $name,
        // così riesco ad accedere a una proprietà che Laravel non ha ancora definito
        // e gli sto dando il valore che voglio io, ossia $name

        $product->description = $description;
        $product->price = $price;

        // debug per vedere il contenuto dell'oggetto Product
        dd($product);

        $product->save();   // sto salvando il mio prodotto nel mio dd





        //////////////////////////////// Metodo salvare dati DB 2/////////////////////////////////////////////////////////////////////////////////////

        // questo metodo si chiama Mass Assignment. Quello che abbiamo fatto sopra nel metodo 1
        // può essere fatto con un'unica richiesta

        // recupero le capacità di salvataggio del mio modello 
        // questo metodo accetta al suo interno un array chiave-valore, che vuole come chiave il nome del campo
        // e come valore il valore da attribuire al campo

        // Product::create([
        //     'name' => $name,
        //     'description' => $description,
        //     'price' => $price,
        // ]);              

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        return redirect()->back();  // back significa torna indietro alla pagina in cui stavi
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









    public function index()
    {
        // all'interno del modello posso richiamare diverse operazioni che mi permettono di recuperare le varie informazioni,
        // ovvero i vari Record in questo caso
        $products = Product::all();    
        // recupero TUTTI i prodotti all'interno del mio database,
        // richiamo la mia classe Product che è la classe che si mette in comunicazione tra Laravel e il database
        // e le dico di prendere tutti i dati

        return view('product.index', ['products' => $products]);  
        // sarebbe il ritorno della vista del file index dentro la CARTELLA product
        // devo ora interrogare il db per recuperare le mie informazioni



    }
}
