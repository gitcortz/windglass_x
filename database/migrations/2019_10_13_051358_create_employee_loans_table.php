<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('amount', 9, 2)->nullable();
            $table->timestamps();

            $table->biginteger('employee_id')->unsigned();  
            $table->foreign('employee_id')->references('id')->on('employees'); 

            $table->biginteger('loan_type_id')->unsigned();  
            $table->foreign('loan_type_id')->references('id')->on('loan_types');
            
            $table->biginteger('loan_status_id')->unsigned();  
            $table->foreign('loan_status_id')->references('id')->on('loan_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_loans');
    }
}
