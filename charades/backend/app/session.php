<?php

namespace App;
use App\correct_answer;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    public function answers() {
        return $this->hasMany(correct_answer::class);
    }
}
