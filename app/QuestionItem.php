<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionItem extends Model
{
    protected $fillable = ['question_id', 'item', 'price'];

    public function question()
    {
    	return $this->belongsTo(Question::class);
    }
}
