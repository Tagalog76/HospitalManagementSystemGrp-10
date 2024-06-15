<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Doctors extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'first_name',
        'last_name',
        'specialization',
        'license_number',
        'phone',
        'email',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointments::class);
    }
}
