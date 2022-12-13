<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function risk_management(){
        return $this->belongsTo(RiskManagement::class, 'risk_management_id', 'id');
    }
}
