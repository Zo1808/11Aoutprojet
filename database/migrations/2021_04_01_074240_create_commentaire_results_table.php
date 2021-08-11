<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaireResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire_results', function (Blueprint $table) {
            $table->id();
            $table->integer('UE_id');
            $table->integer('classe_id');
            $table->integer('filiere_id');
            $table->integer('exam_type_id');
            $table->string('commentaire',1000);
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
        Schema::dropIfExists('commentaire_results');
    }
}
