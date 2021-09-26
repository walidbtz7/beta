<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imams', function (Blueprint $table) {
            $table->id();
            //personnel
            $table->string('nom');
            $table->string('prenom');
            $table->string('naissance');
            $table->string('stituation');
            $table->string('ville');
            $table->string('natoinalite');
            $table->string('profession');
            $table->string('email');
            $table->string('tel');
            //formation scolaire
            $table->string('bac');
            $table->string('etudes');
            $table->string('deplome');
            $table->string('type_deplome')->nullable();
            $table->string('langue');
            $table->string('niveau_arabe');
            $table->string('niveau_francais');
            $table->string('autre')->nullable();
            $table->string('niveau_autre')->nullable();
            //formation religieuse
            $table->string('expérience');
            $table->string('combien_expérience')->nullable();
            

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
        Schema::dropIfExists('imams');
    }
}
