<?php

namespace App;
use App\correct_answer;
use Illuminate\Database\Eloquent\Model;

class participator extends Model
{
    public $fillable = [
        'name',
     
    ];
    public function answers() {
        return $this->hasMany(correct_answer::class);
    }
}
