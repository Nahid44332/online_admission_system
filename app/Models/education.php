<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $guarded = [];

    // প্রতিটি Education belongs to one Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
