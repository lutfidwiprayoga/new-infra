<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrikOperation extends Model
{
    use HasFactory;
    protected $table = 'distrik_operations';
    protected $fillable = [
        'city_id',
        'name',
    ];
    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
    public function ns()
    {
        return $this->hasMany(NetworkService::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
