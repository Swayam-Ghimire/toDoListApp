<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDos extends Model
{
    protected $fillable = ['title', 'description', 'is_completed', 'due_date', 'difficulty_id', 'user_id'];
    /** @use HasFactory<\Database\Factories\ToDosFactory> */
    use HasFactory;
    // define a relationship with the Difficulty model
    public function difficulty(){
        return $this->belongsTo(Difficulty::class, 'difficulty_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
