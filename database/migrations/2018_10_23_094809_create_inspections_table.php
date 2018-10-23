<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('ceiling');
            $table->string('ceiling_link')->nullable()->default(null);
            $table->boolean('wall');
            $table->string('wall_link')->nullable()->default(null);;
            $table->boolean('floor');
            $table->string('floor_link')->nullable()->default(null);;
            $table->boolean('baseboard');
            $table->string('baseboard_link')->nullable()->default(null);
            $table->boolean('windows_damaged');
            $table->string('windows_damaged_link')->nullable()->default(null);;
            $table->boolean('windows_secure');
            $table->string('windows_secure_link')->nullable()->default(null);;
            $table->boolean('windows_evidence');
            $table->string('windows_evidence_link')->nullable()->default(null);
            $table->boolean('toilets_leaking');
            $table->string('toilets_leaking_link')->nullable()->default(null);;
            $table->boolean('faucets_dripping_water');
            $table->string('faucets_dripping_water_link')->nullable()->default(null);;
            $table->boolean('evidence_under_sink_leak');
            $table->string('evidence_under_sink_leak_link')->nullable()->default(null);;
            $table->boolean('unit_operational_appear');
            $table->string('unit_operational_appear_link')->nullable()->default(null);;
            $table->boolean('hvac_leaking_evidence');
            $table->string('hvac_leaking_evidence_link')->nullable()->default(null);;
            $table->string('hvac_filter_change_need');
            $table->string('hvac_filter_change_need_link')->nullable()->default(null);;
            $table->string('thermostat_reading_degree');
            $table->boolean('light_switch_working');
            $table->string('light_switch_working_link')->nullable()->default(null);;
            $table->integer('smoke_detector_inspection');
            $table->integer('refigerator_inspection');
            $table->integer('stove_inspection');
            $table->integer('dryer_unit_inspection');
            $table->integer('baseboard_inspection');
            $table->boolean('pest_treatment_need');
            $table->string('pest_treatment_need_link')->nullable()->default(null);;
            $table->text('observation')->nullable()->default(null);;

            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('inspections');
    }
}
