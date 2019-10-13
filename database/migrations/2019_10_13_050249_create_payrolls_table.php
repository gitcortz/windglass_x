<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num_of_days_work')->nullable();
            $table->decimal('bonus', 9, 2)->nullable();
            $table->decimal('overtime_pay', 9, 2)->nullable();
            $table->decimal('gross_salary', 9, 2)->nullable();
            $table->integer('absent_days')->nullable();
            $table->integer('late_hours')->nullable();
            $table->decimal('net_pay', 9, 2)->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->timestamps();

            $table->biginteger('employee_id')->unsigned();  
            $table->foreign('employee_id')->references('id')->on('employees'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payrolls');
    }
}
