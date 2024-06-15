<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 
        'doctor_id', 
        'appointment_date',
        'status', 
        'remarks'
    ];

    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctors::class);
    }
}
