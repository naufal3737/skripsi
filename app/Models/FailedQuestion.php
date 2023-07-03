<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FailedQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'level',
        'audit_id'
    ];

    public function question(){
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function audit(){
        return $this->belongsTo(Question::class, 'audit_id', 'id');
    }

    public function failedQuestion(){
        return $this->hasMany(FailedQuestion::class);
    }
}
