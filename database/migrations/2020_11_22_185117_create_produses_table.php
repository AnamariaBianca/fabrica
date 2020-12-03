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
            $table->id();
            $table->string('denumire_produs');
            $table->text('descriere_produs');
            $table->softDeletes();
            $table->timestamps();
        });


        Schema::create('contract_produs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produs_id');
            $table->unsignedBigInteger('contract_id');
            $table->timestamps();

            $table->unique(['produs_id','contract_id']);
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
