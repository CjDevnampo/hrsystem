<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    protected $table = 'deduction';

    protected $fillable =
        [
            'id_number',
            'employee_id',
            'payroll_id',
            'sss',
            'pag_ibig',
            'phil_health',
        ];

    public function payroll()
    {
        return $this->belongsTo(Payroll::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function employeeRate()
    {
        return $this->belongsTo(EmployeeRates::class);
    }
}
