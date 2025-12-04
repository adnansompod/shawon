<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'department_id', 'image', 'name', 'degree',
        'speciality', 'hospital_name', 'location',
        'contact_num', 'email'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
