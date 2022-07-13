<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site_id extends Model
{
    use HasFactory;
    protected $table = 'site_ids';
    protected $fillable = [
        'name',
    ];


    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
    public function city()
    {
        return $this->hasMany(City::class);
    }
    
}
