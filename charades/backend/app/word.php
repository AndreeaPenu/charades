<?php

namespace App;
use App\correct_answer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class word extends Model
{
    use Notifiable;
    public function answers() {
        return $this->hasMany(correct_answer::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'word'
    ];


}
