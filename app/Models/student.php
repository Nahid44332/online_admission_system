<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    // এক Student-এর অনেক Education
    public function education()
    {
        return $this->hasMany(Education::class, 'student_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id'); 
    }

     public function payments() {
        return $this->hasMany(Payment::class);
    }

    // Total Paid
    public function getTotalPaidAttribute() {
        return $this->payments->sum('amount');
    }

    // Due Amount
    public function getDueAmountAttribute() {
        return $this->total_fee - $this->total_paid;
    }
}

