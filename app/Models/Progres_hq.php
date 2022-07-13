<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres_hq extends Model
{
    use HasFactory;
    protected $table = 'progres_hqs';
    protected $fillable = [
        'simple_progress_id',
        'name'
    ];

    public function simple_progres()
    {
        return $this->belongsTo(Simple_progres::class, 'simple_progress_id', 'id');
    }

    public function progres_region()
    {
        return $this->hasMany(Progres_region::class);
    }
    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
}
