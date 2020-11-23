<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produses', function (Blueprint $table) {
            $table->increments('id_produs');
            $table->string('denumire_produs');
            $table->text('descriere_produs');
            
            $table->timestamps();
        });

        Schema::table('produses', function (Blueprint $table) {
            $table->foreignId('id_contract')->constrained('contracts');
            $table->foreignId('id_furnizor')->constrained('furnizors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produses');
    }
}
