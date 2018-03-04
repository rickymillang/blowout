<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['establishment_id', 'question'];

    public function establishment()
    {
    	return $this->belongsTo(Establishment::class);
    }

    public function question_items()
    {
    	return $this->hasMany(QuestionItem::class);
    }
}
