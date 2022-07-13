<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres_region extends Model
{
    use HasFactory;
    protected $table = 'progres_regions';
    protected $fillable = ['simple_progress_id', 'progress_hq_id', 'name'];

    public function simpleprogress()
    {
        return $this->belongsTo(Simple_progres::class, 'simple_progress_id', 'id');
    }

    public function progres_hq()
    {
        return $this->belongsTo(Progres_hq::class, 'progress_hq_id', 'id');
    }
    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
}
