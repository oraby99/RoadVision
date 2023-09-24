<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sevirity extends Model
{
    protected $table = 'sevirities';

    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function report()
    {
        return $this->hasOne(report::class);
    }
    public function file()
    {
        return $this->hasOne(file::class);
    }
}
