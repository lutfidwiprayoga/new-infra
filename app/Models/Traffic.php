<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    use HasFactory;
    protected $table = 'traffic';
    protected $fillable = [
        'batch',
        'program_hq',
        'site_id_plan',
        'site_name_plan',
        'site_id_actual',
        'site_name_actual',
        'longitude',
        'lotitude',
        'alamat_site',
        'do',
        'ns',
        'city',
        'branch',
        'tower_provider',
        'infra_type',
        'progress_regional',
        'progress_hq',
        'simple_progress',
        'target_bulan_berjalan',
        'issue',
        'target_rfi_date',
        'target_rfi_week',
        'kkst_date',
        'sla_rfc_b2s',
        'sla_rfi',
        'drm_date',
        'rfi_date',
        'oa_date',
        'target_oa_date',
        'target_oa_week',
        'month_oa',
        'trm_type',
        'capex_eqp',
        'capex_trm',
        'antena_height',
        'remarks',
        'foto',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
    public function notifikasis()
    {
        return $this->hasMany(Notifikasi::class);
    }
}
