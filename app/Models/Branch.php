<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branches';
    protected $fillable = [
        'ns_id',
        'name'
    ];

    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }

    public function ns()
    {
        return $this->belongsTo(NetworkService::class, 'ns_id', 'id');
    }
}
