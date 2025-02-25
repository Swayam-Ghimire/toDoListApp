<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    protected $fillable = ['name', 'value'];
    /** @use HasFactory<\Database\Factories\DifficultyFactory> */
    use HasFactory;
    public function toDos(){
        return $this->hasMany(ToDos::class, 'difficulty_id');
    }
}
