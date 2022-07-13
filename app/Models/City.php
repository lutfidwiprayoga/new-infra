<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
        'site_id',
        'city_id',
        'name',
        'longitude',
        'latitude'
    ];

    public function allData()
    {
        $result = DB::table('cities')->select('name', 'longitude', 'latitude')->get();
        return $result;
    }

    public function newinfra()
    {
        return $this->hasMany(NewInfra::class);
    }
    public function site()
    {
        return $this->belongsTo(Site_id::class, 'site_id', 'id');
    }
}
