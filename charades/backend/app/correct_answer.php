<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\word;
use App\participator;
use App\session;

class correct_answer extends Model
{
    public function word() {
        return $this->belongsTo(word::class);
    }
    public function participator() {
        return $this->belongsTo(participator::class);
    }
    public function session() {
        return $this->belongsTo(session::class);
    }
}
