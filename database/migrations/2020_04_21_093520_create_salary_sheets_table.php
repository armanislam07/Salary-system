<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalarySheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('emp_id');
            $table->integer('project_id');
            $table->integer('basic');
            $table->integer('h_allowns')->nullable();
            $table->integer('m_allowns')->nullable();
            $table->integer('total');
            $table->integer('advance')->nullable();
            $table->integer('loan')->nullable();
            $table->integer('payment');
            $table->string('salary_month');
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
        Schema::dropIfExists('salary_sheets');
    }
}
