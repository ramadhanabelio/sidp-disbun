<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function kecamatans()
    {
        return $this->hasMany(Kecamatan::class);
    }
}
