<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('amount_paid', 9, 2)->nullable();
            $table->timestamps();

            $table->biginteger('payroll_id')->unsigned();  
            $table->foreign('payroll_id')->references('id')->on('payrolls');

            $table->biginteger('employee_loan_id')->unsigned();  
            $table->foreign('employee_loan_id')->references('id')->on('employee_loans');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_transactions');
    }
}
