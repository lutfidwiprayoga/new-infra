<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;
    protected $table = 'notifikasis';
    protected $fillable = ['traffic_id', 'user_id'];

    public function traffic()
    {
        return $this->belongsTo(Traffic::class, 'traffic_id', 'id');
    }
    public function newinfra()
    {
        return $this->belongsTo(NewInfra::class, 'traffic_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
