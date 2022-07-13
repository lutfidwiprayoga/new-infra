<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Targetbulanberjalan extends Model
{
    use HasFactory;
    protected $table = 'targetbulanberjalans';
    protected $fillable = ['simple_progress_id', 'name'];

    public function Siteid()
    {
        return $this->belongsTo(Simple_progres::class, 'simple_progress_id', 'id');
    }
    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
}
