<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simple_progres extends Model
{
    use HasFactory;
    protected $table = 'simple_progres';
    protected $fillable = [
        'name'
    ];

    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }

    public function progres_regional()
    {
        return $this->hasMany(Progres_region::class);
    }
    public function progres_hq()
    {
        return $this->hasMany(Progres_hq::class);
    }
    public function targetbulanberjalan()
    {
        return $this->hasMany(Targetbulanberjalan::class);
    }
}
