<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskManagement extends Model
{
    use HasFactory;

    protected $table = 'risk_managements';

    public function question(){
        return $this->hasMany(Question::class);
    }
}
