<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->text('description');   // il metodo text mi permette di creare una colonna con stringhe con piu caratteri circa 10000
            $table->float('price'); // usiamo il metodo float per poter andare a inserire numeri con la virgola
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
