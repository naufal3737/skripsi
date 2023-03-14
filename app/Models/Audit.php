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
        'passed_process',
        'files',
        'level',
        'raw_data',
    ];

    protected $casts = [
        'validated' => 'boolean',
        'passed_process' => 'array',
        'files' => 'array',
        'level' => 'integer',
        'raw_data' => 'object',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function failedQuestion(){
        return $this->hasMany(FailedQuestion::class);
    }

    public function calculation(){
        return $this->hasMany(Calculation::class);
    }
}
