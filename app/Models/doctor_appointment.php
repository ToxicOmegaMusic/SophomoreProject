<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor_appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'patient_id',
        'date',
        'comment',
        'morning_prescription',
        'afternoon_prescription',
        'night_prescription'
    ];
}
