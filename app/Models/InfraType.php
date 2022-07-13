<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfraType extends Model
{
    use HasFactory;
    protected $table = 'infra_types';
    protected $fillable = ['name', 'tp_id'];

    public function towerproviders()
    {
        return $this->belongsTo(TowerProvider::class, 'tp_id', 'id');
    }
    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
}
