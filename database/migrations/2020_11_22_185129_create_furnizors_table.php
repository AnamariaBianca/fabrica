<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFurnizorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furnizors', function (Blueprint $table) {
            $table->increments('id_furnizor');
            $table->string('denumire_furnizor');
            
            $table->timestamps();
        });

        Schema::table('furnizors', function (Blueprint $table) {
            $table->foreignId('id_produs')->constrained('produses');
            $table->foreignId('id_contract')->constrained('contracts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('furnizors');
    }
}
