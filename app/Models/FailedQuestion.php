<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FailedQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'level_id',
        'audit_id'
    ];

    public function question(){
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
