<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


    public function risk_management(){
        return $this->belongsTo(RiskManagement::class, 'risk_management_id', 'id');
    }

    public function failedQuestion(){
        return $this->hasMany(FailedQuestion::class);
    }
}
