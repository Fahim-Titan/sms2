<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('results', function ($table) {
            $table->renameColumn('marks', 'quiz1');
            $table->renameColumn('quiz','quiz2');
            $table->integer('quiz3');
            $table->integer('quiz4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('results', function ($table) {
            $table->renameColumn('quiz1', 'marks');
            $table->renameColumn('quiz2','quiz');
            $table->dropColumn('quiz3');
            $table->dropColumn('quiz4');
        });
    }
}
