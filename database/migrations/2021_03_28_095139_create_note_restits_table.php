<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteRestitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_restits', function (Blueprint $table) {
            $table->id();
            $table->integer('etudiant_id');
            $table->integer('filiere_id');
            $table->integer('classe_id');
            $table->integer('UE_id');
            $table->string('matiere');
            $table->double('note');
            $table->integer('credit');
            $table->integer('coeff');
            $table->integer('type_exam_id');
              $table->double('noteSansCoeff');
           /* $table->integer('etudiant_id');
            $table->integer('filiere_id');
            $table->integer('classe_id');
            $table->double('moyenneparUE');
            $table->double('note');
            $table->double('notesWithCoeff');
            $table->integer('UE_id');
            $table->integer('matiere_id');
            $table->string('matiere');
            $table->integer('coeff');
           $table->integer('type_exam_ids');
           $table->integer('credit');*/
         
        
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
        Schema::dropIfExists('note_restits');
    }
}
