<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('designation');
            $table->string('marque');
            $table->integer('prix');
            $table->date('date_aquisition');
            $table->integer('prem_km');
            $table->string('puissance');
            $table->string('consomation');
            $table->string('carburant');
            $table->string('reference');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicule');
    }
}
