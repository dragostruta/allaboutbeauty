<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id', 'appointment_date', 'employee_information_id', 'salon_id', 'service_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function empolyeeInformation(){
        return $this->belongsTo(EmployeeInformation::class);
    }

    public function services(){
        return $this->belongsTo(Service::class);
    }

    public function salon(){
        return $this->belongsTo(Salon::class);
    }
}
