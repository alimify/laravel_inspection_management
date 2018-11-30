
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Report</h4>
                <h6 class="card-subtitle"></h6>
                <div class="r-separator">
                    <form action="{{route('staff.inspection.submit',$task->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="border p-3">
                            <h4>STRUCTURE:</h4>


                            <div class="form-group pb-2">
                                <label for="title">CEILINGS</label>
                                <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling" value="1" {{$inspection && $inspection->ceiling ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling" value="2" {{$inspection && !$inspection->ceiling ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="ceiling_text">{{$inspection->ceiling_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="ceiling">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title">WALLS</label>
                                <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="walls" name="walls" value="1"{{$inspection && $inspection->walls ? ' checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="walls" name="walls" value="2"{{$inspection && !$inspection->walls ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="walls_text">{{$inspection->walls_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="walls">
                                </div>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title">FLOORS</label>
                                <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="floors" name="floors" value="1"{{$inspection && $inspection->floors ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="floors" name="floors" value="2"{{$inspection && !$inspection->floors ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="floors_text">{{$inspection->floors_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="floors">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title">BASEBOARDS</label>
                                <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="baseboard" name="baseboard" value="1"{{$inspection && $inspection->baseboard ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="baseboard" name="baseboard" value="2"{{$inspection && !$inspection->baseboard ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="baseboard_text">{{$inspection->baseboard_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="baseboards">
                                </div>
                            </div>



                            <div class="form-group pb-2">
                                <label for="title">WINDOWS/SLINDING GLASS DOORS:</label>
                                <h6>DAMAGED?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_damaged" name="windows_damaged" value="1"{{$inspection && $inspection->windows_damaged ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_damaged" name="windows_damaged" value="2"{{$inspection && !$inspection->windows_damaged ? 'checked':''}}> No
                                <div class="row mt-2 mb-2">
                                    <textarea class="form-control mb-2" name="windows_damaged_text">{{$inspection->windows_damaged_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="window_damaged">
                                </div>

                                <h6>SECURED?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_secured" name="windows_secured" value="1"{{$inspection && $inspection->windows_secured ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_secured" name="windows_secured" value="2"{{$inspection && !$inspection->windows_secured ? 'checked':''}}> No
                                <div class="row mt-2 mb-2">
                                    <textarea class="form-control mb-2" name="windows_secured_text">{{$inspection->windows_secured_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="window_secured">
                                </div>

                                <h6>EVIDENCE OF WATER INTRUSION?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_evidence" name="windows_evidence" value="1"{{$inspection && $inspection->windows_evidence ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_evidence" name="windows_evidence" value="2"{{$inspection && !$inspection->windows_evidence ? 'checked':''}}> No
                                <div class="row mt-2 mb-2">
                                    <textarea class="form-control mb-2" name="windows_evidence_text">{{$inspection->windows_evidence_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="window_evidence">
                                </div>

                            </div>
                        </div>



                        <div class="border p-3">
                            <h4>PLUMBING:</h4>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block">TOILETS LEAKING?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="toilets_leak" name="toilets_leak" value="1"{{$inspection && $inspection->toilets_leak ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="toilets_leak" name="toilets_leak" value="2"{{$inspection && !$inspection->toilets_leak ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="toilets_leak_text">{{$inspection->toilets_leak_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="toilets_leak">
                                </div>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">FAUCETS DRIPPING WATER?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="faucets_dripping_water" name="faucets_dripping_water" value="1"{{$inspection && $inspection->faucets_dripping_water ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="faucets_dripping_water" name="faucets_dripping_water" value="2"{{$inspection && !$inspection->faucets_dripping_water ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="faucets_dripping_water_text">{{$inspection->faucets_dripping_water_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="faucets_dripping_water">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block">EVIDENCE OF ANY LEAKS UNDER SINKS?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="evidence_leak_under_sink" name="evidence_leak_under_sink" value="1"{{$inspection && $inspection->evidence_leak_under_sink ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="evidence_leak_under_sink" name="evidence_leak_under_sink" value="2"{{$inspection && !$inspection->evidence_leak_under_sink ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="evidence_leak_under_sink_text">{{$inspection->evidence_leak_under_sink_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="evidence_leak_under_sink">
                                </div>
                            </div>

                        </div>




                        <div class="border p-3">
                            <h4>HVAC:</h4>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block">DOES UNIT APPEAR TO BE OPERATIONAL?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="unit_operational" name="unit_operational" value="1"{{$inspection && $inspection->unit_operational ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="unit_operational" name="unit_operational" value="2"{{$inspection && !$inspection->unit_operational ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="unit_operational_text">{{$inspection->unit_operational_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="unit_operational">
                                </div>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">EVIDENCE OF LEAKING?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="hvac_evidence" name="hvac_evidence" value="1"{{$inspection && $inspection->hvac_evidence ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="hvac_evidence" name="hvac_evidence" value="2"{{$inspection && !$inspection->hvac_evidence ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="hvac_evidence_text">{{$inspection->hvac_evidence_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="hvac_evidence">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block">DOES THE FILTER NEED TO BE CHANGED?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="hvac_filter_change_need" name="hvac_filter_change_need" value="1"{{$inspection && $inspection->hvac_filter_change_need ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="hvac_filter_change_need" name="hvac_filter_change_need" value="2"{{$inspection && !$inspection->hvac_filter_change_need ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="hvac_filter_change_need_text">{{$inspection->hvac_filter_change_need_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="hvac_filter_change_need">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block d-inline">THERMOSTAT READING AT THE TIME OF INSPECTION</label>
                                <input type="text" size="15" class="form-check form-check-inline ml-2" id="thermostat_degree_reading" name="thermostat_degree_reading" value="{{$inspection && $inspection->thermostat_degree_reading ? $inspection->thermostat_degree_reading:''}}"> DEGREES
                            </div>


                        </div>


                        <div class="border p-3">
                            <h4>ELECTRICAL:</h4>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">LIGHT SWITCHES: ARE THEY WORKING?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="electrical_light_switch" name="electrical_light_switch" value="1"{{$inspection && $inspection->electrical_light_switch ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="electrical_light_switch" name="electrical_light_switch" value="2"{{$inspection && !$inspection->electrical_light_switch ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="electrical_light_switch_text">{{$inspection->electrical_light_switch_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="electrical_light_switch">
                                </div>
                            </div>

                        </div>


                        <div class="border p-3">
                            <h4>LIFE SAFETY:</h4>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block">SMOKE DETECTOR</label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="smoke_detector">{{$inspection && $inspection->smoke_detector ? $inspection->smoke_detector:''}}</textarea>
                                <div class="row">
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="smoke_detector">
                                </div>
                            </div>
                        </div>



                        <div class="border p-3">
                            <h4>MAJOR APPLIIANCES:</h4>
                            <div class="form-group pb-2">
                                <label for="title" class="d-block">REFIGERATOR</label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="major_refigerator">{{$inspection && $inspection->major_refigerator ? $inspection->major_refigerator:''}}</textarea>
                                <div class="row">
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="major_refigerator">
                                </div>
                            </div>
                            <div class="form-group pb-2">
                                <label for="title" class="d-block">STOVE</label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="major_stove">{{$inspection && $inspection->major_stove ? $inspection->major_stove:''}}</textarea>
                                <div class="row">
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="major_stove">
                                </div>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">WASHER/DRYER UNITS </label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="major_washer">{{$inspection && $inspection->major_washer ? $inspection->major_washer:''}}</textarea>
                                <div class="row">
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="major_washer">
                                </div>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">BASEBOARD</label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="major_baseboard">{{$inspection && $inspection->major_baseboard ? $inspection->major_baseboard:''}}</textarea>
                                <div class="row">
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="major_baseboard">
                                </div>
                            </div>


                        </div>


                        <div class="border p-3">
                            <h4>PEST:</h4>
                            <div class="form-group pb-2">
                                <label for="title" class="d-block">TREATMENT NEEDED?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="pest_treatment" name="pest_treatment" value="1"{{$inspection && $inspection->pest_treatment ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="pest_treatment" name="pest_treatment" value="2"{{$inspection && !$inspection->pest_treatment ? 'checked':''}}> No
                                <div class="row">
                                    <textarea class="form-control mb-2" name="pest_treatment_text">{{$inspection->pest_treatment_text??''}}</textarea>
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="pest_treatment">
                                </div>
                            </div>
                        </div>


                        <div class="border p-3">
                            <h4>OBSERVATIONS:</h4>
                            <div class="form-group pb-2">
                                <textarea class="form-control" name="observation">{{$inspection && $inspection->observation ? $inspection->observation:''}}</textarea>
                                <div class="row">
                                    <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="observation">
                                </div>
                            </div>

                            <div class="text-center">
                                <input class="btn btn-primary btn-success" type="submit" name="submit" value="SUBMIT">
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
