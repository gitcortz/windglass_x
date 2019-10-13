<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeLoan extends Model
{
    protected $fillable = ['employee_id', 'loan_amount', 'loan_type', 'loan_status'];

    public function LoanType(){
        return $this->belongsTo('App\LoanType');
    }

    public function LoanStatus(){
        return $this->belongsTo('App\LoanStatus');
    }
}
