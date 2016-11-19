<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnrollmentSubidAddResultQuizClassPerformanceFinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('results',function($table){
            $table->integer('quiz')->default(0)->nullable();
            $table->integer('classPerformance')->default(0)->nullable();
            $table->integer('final')->default(0)->nullable();
        });
        Schema::table('enrollments', function($table){
            $table->integer('sub_id');
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
            $table->dropColumn('classPerformance');
            $table->dropColumn('quiz');
            $table->dropColumn('final');
        });
    }
}
