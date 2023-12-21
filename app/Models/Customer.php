<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }

    public function addQuestionnaire($questionnaire)
    {
        return $this->questionnaires()->create($questionnaire);
    }
}
