<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TowerProvider extends Model
{
    use HasFactory;
    protected $table = 'tower_providers';
    protected $fillable = ['name'];

    public function infratype()
    {
        return $this->hasMany(InfraType::class);
    }

    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
}
