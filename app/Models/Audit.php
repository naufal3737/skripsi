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
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function failedQuestion(){
        return $this->hasMany(FailedQuestion::class);
    }
}
