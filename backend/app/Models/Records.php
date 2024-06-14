<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'visit_date',
        'diagnosis',
        'treatment',
        'notes',
    ];

    // Define relationships (assuming you have Patient and Doctor models)
    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctors::class);
    }
}
