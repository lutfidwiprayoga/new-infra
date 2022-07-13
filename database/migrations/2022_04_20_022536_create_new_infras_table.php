<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewInfrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_infras', function (Blueprint $table) {
            $table->id();
            $table->string('batch');
            $table->string('program_hq')->nullable();
            $table->string('site_id_plan');
            $table->string('site_name_plan');
            $table->string('site_id_actual');
            $table->string('site_name_actual');
            $table->float('longitude')->nullable();
            $table->float('lotitude')->nullable();
            $table->string('alamat_site')->nullable();
            $table->string('do');
            $table->string('ns');
            $table->string('city');
            $table->string('branch');
            $table->string('tower_provider');
            $table->string('infra_type');
            $table->string('progress_regional');
            $table->string('progress_hq');
            $table->string('simple_progress');
            $table->string('target_bulan_berjalan')->nullable();
            $table->string('issue')->nullable();
            $table->string('target_rfi_date')->nullable();
            $table->string('target_rfi_week')->nullable();
            $table->string('kkst_date');
            $table->string('sla_rfc_b2s')->nullable();
            $table->string('sla_rfi')->nullable();
            $table->string('drm_date')->nullable();
            $table->string('rfi_date')->nullable();
            $table->string('oa_date')->nullable();
            $table->string('target_oa_date')->nullable();
            $table->string('target_oa_week')->nullable();
            $table->string('month_oa')->nullable();
            $table->string('trm_type');
            $table->string('capex_eqp')->nullable();
            $table->string('capex_trm')->nullable();
            $table->string('antena_height')->nullable();
            $table->string('remarks')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_infras');
    }
}
