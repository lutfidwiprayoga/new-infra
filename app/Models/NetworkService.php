<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkService extends Model
{
    use HasFactory;
    protected $table = 'network_services';
    protected $fillable = [
        'do_id',
        'name',
    ];
    public function branchs()
    {
        return $this->hasMany(Branch::class);
    }
    public function distrikoperation()
    {
        return $this->belongsTo(DistrikOperation::class, 'do_id', 'id');
    }
    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
}
