<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    public function matricula()
    {
        return $this->belongsTo(Matricula::class, 'matricula_id');
    }
}
