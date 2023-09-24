<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request extends Model
{
    protected $table = 'requests';

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
