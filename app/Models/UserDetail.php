<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = 'users_details';

    protected $fillable = ['user_id','programme_awareness', 'other_awareness','attendance_choice', 'expectation', 'question'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
