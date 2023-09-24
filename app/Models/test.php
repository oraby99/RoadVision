<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    protected $fillable = [
        'lat', 'long','mainImage','imageDetected','date','video','size','employee_id'
    ];
    public function employee()
    {
        return $this->belongsTo(employee::class);
    }
}
