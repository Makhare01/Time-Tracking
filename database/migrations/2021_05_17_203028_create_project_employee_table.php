<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_employee', function (Blueprint $table) {
            $table->id();
            $table->string('employee_email')->nullable();
            $table->string('project_id')->nullable();
            $table->timestamps();
            // $table->foreignId('project_id')->constrained();
            // $table->foreignId('employee_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_employee');
    }
}
