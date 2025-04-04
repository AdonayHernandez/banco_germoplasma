<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    public function seed()
    {
        return $this->belongsTo(Seed::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
