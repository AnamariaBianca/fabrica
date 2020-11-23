<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id_contract');
            $table->string('denumire_contract');
            $table->text('descriere_contract');
            
           
            $table->timestamps();
        });

        Schema::table('contracts', function (Blueprint $table) {
            $table->foreignId('id_produs')->constrained('produses');
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
        Schema::dropIfExists('contracts');
    }
}
