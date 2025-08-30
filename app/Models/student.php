<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    // এক Student-এর অনেক Education
    public function educations()
    {
        return $this->hasMany(Education::class, 'student_id', 'id');
    }
}

