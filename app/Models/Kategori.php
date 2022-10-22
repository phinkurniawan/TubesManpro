<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori_motor";
    protected $guarded = [
        'id'
    ];

    public function jenis()
    {
        return $this->hasMany(Jenis::class);
    }
}
