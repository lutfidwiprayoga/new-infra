<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotogrid extends Model
{
    use HasFactory;
    protected $table = 'fotogrids';
    protected $fillable  = ['id', 'foto'];

    public function traffics()
    {
        return $this->hasMany(Traffic::class);
    }
}
