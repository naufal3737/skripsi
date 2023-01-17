<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $fillable = [
        'progress',
        'user_id',
        'validated',
        'passedProcess',
        'files',
        'level',
    ];

    protected $casts = [
        'validated' => 'boolean',
        'passedProcess' => 'array',
        'files' => 'array',
        'level' => 'integer',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function failedQuestion(){
        return $this->hasMany(FailedQuestion::class);
    }
}
