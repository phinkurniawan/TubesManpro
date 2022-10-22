<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $table = "jenis_motor";
    protected $guarded = [
        'id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function motor()
    {
        return $this->hasMany(Motor::class);
    }
}
