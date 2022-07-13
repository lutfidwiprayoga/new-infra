<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewInfra extends Model
{
    use HasFactory;
    protected $table = 'new_infras';
    protected $fillable = [
        'batch',
        'program_hq',
        'longitude',
        'lotitude',
        'alamat_site',
        'site_id_plan',
        'site_name_plan',
        'site_id_actual',
        'site_name_actual',
        'do',
        'ns',
        'city',
        'branch',
        'progress_regional',
        'progress_hq',
        'simple_progress',
        'tower_provider',
        'infra_type',
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

    public function notifikasis()
    {
        return $this->hasMany(Notifikasi::class);
    }
}
