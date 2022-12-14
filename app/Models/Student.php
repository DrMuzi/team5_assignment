<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Score;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function scores(){
        return $this->hasMany(Score::class);
    }
}
