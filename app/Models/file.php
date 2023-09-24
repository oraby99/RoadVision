<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    protected $fillable = [
        'lat', 'long','mainImage','imageDetected','sevirity_id','date','priority','Solution','Material','Cost',
        'demageTypes','potholeTypes','potholeWidth','potholeHeight','potholeScores','video','request_id','address','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function request()
    {
        return $this->belongsTo(request::class);
    }
    public function sevirity()
    {
        return $this->belongsTo(sevirity::class);
    }
}
