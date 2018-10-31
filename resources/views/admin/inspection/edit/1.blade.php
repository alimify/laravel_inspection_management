
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Report</h4>
                <h6 class="card-subtitle"></h6>
                <div class="r-separator">
                    <form action="{{route('admin.inspection.update',$task->id)}}" method="POST">
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
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title">WALLS</label>
                                <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="walls" name="walls" value="1"{{$inspection && $inspection->walls ? ' checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="walls" name="walls" value="2"{{$inspection && !$inspection->walls ? 'checked':''}}> No
                                <div class="row">
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="walls_attachment" type="file">
                                </div>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title">FLOORS</label>
                                <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="floors" name="floors" value="1"{{$inspection && $inspection->floors ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="floors" name="floors" value="2"{{$inspection && !$inspection->floors ? 'checked':''}}> No
                                <div class="row">
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="floors_attachment" type="file">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title">BASEBOARDS</label>
                                <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="baseboard" name="baseboard" value="1"{{$inspection && $inspection->baseboard ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="baseboard" name="baseboard" value="2"{{$inspection && !$inspection->baseboard ? 'checked':''}}> No
                                <div class="row">
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="baseboards_attachment" type="file">
                                </div>
                            </div>



                            <div class="form-group pb-2">
                                <label for="title">WINDOWS/SLINDING GLASS DOORS:</label>
                                <h6>DAMAGED?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_damaged" name="windows_damaged" value="1"{{$inspection && $inspection->windows_damaged ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_damaged" name="windows_damaged" value="2"{{$inspection && !$inspection->windows_damaged ? 'checked':''}}> No
                                <div class="row mt-2 mb-2">
                                    <small>Attachment</small>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>

                                <h6>SECURED?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_secured" name="windows_secured" value="1"{{$inspection && $inspection->windows_secured ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_secured" name="windows_secured" value="2"{{$inspection && !$inspection->windows_secured ? 'checked':''}}> No
                                <div class="row mt-2 mb-2">
                                    <small>Attachment</small>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>

                                <h6>EVIDENCE OF WATER INTRUSION?</h6>
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_evidence" name="windows_evidence" value="1"{{$inspection && $inspection->windows_evidence ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="windows_evidence" name="windows_evidence" value="2"{{$inspection && !$inspection->windows_evidence ? 'checked':''}}> No
                                <div class="row mt-2 mb-2">
                                    <small>Attachment</small>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
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
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">FAUCETS DRIPPING WATER?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="faucets_dripping_water" name="faucets_dripping_water" value="1"{{$inspection && $inspection->faucets_dripping_water ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="faucets_dripping_water" name="faucets_dripping_water" value="2"{{$inspection && !$inspection->faucets_dripping_water ? 'checked':''}}> No
                                <div class="row">
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block">EVIDENCE OF ANY LEAKS UNDER SINKS?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="evidence_leak_under_sink" name="evidence_leak_under_sink" value="1"{{$inspection && $inspection->evidence_leak_under_sink ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="evidence_leak_under_sink" name="evidence_leak_under_sink" value="2"{{$inspection && !$inspection->evidence_leak_under_sink ? 'checked':''}}> No
                                <div class="row">
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
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
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">EVIDENCE OF LEAKING?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="hvac_evidence" name="hvac_evidence" value="1"{{$inspection && $inspection->hvac_evidence ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="hvac_evidence" name="hvac_evidence" value="2"{{$inspection && !$inspection->hvac_evidence ? 'checked':''}}> No
                                <div class="row">
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>
                            </div>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block">DOES THE FILTER NEED TO BE CHANGED?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="hvac_filter_change_need" name="hvac_filter_change_need" value="1"{{$inspection && $inspection->hvac_filter_change_need ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="hvac_filter_change_need" name="hvac_filter_change_need" value="2"{{$inspection && !$inspection->hvac_filter_change_need ? 'checked':''}}> No
                                <div class="row">
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
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
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>
                            </div>

                        </div>


                        <div class="border p-3">
                            <h4>LIFE SAFETY:</h4>


                            <div class="form-group pb-2">
                                <label for="title" class="d-block">SMOKE DETECTOR</label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="smoke_detector">{{$inspection && $inspection->smoke_detector ? $inspection->smoke_detector:''}}</textarea>
                            </div>
                        </div>



                        <div class="border p-3">
                            <h4>MAJOR APPLIIANCES:</h4>
                            <div class="form-group pb-2">
                                <label for="title" class="d-block">REFIGERATOR</label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="major_refigerator">{{$inspection && $inspection->major_refigerator ? $inspection->major_refigerator:''}}</textarea>

                            </div>
                            <div class="form-group pb-2">
                                <label for="title" class="d-block">STOVE</label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="major_stove">{{$inspection && $inspection->major_stove ? $inspection->major_stove:''}}</textarea>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">WASHER/DRYER UNITS </label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="major_washer">{{$inspection && $inspection->major_washer ? $inspection->major_washer:''}}</textarea>
                            </div>

                            <div class="form-group pb-2">
                                <label for="title" class="d-block">BASEBOARD</label>
                                <textarea class="form-control" rows="1" placeholder="WHAT KIND OF INSPECTION HERE ?" name="major_baseboard">{{$inspection && $inspection->major_baseboard ? $inspection->major_baseboard:''}}</textarea>
                            </div>


                        </div>


                        <div class="border p-3">
                            <h4>PEST:</h4>
                            <div class="form-group pb-2">
                                <label for="title" class="d-block">TREATMENT NEEDED?</label>
                                <input type="radio" class="form-check form-check-inline ml-2" id="pest_treatment" name="pest_treatment" value="1"{{$inspection && $inspection->pest_treatment ? 'checked':''}}> Yes
                                <input type="radio" class="form-check form-check-inline ml-2" id="pest_treatment" name="pest_treatment" value="2"{{$inspection && !$inspection->pest_treatment ? 'checked':''}}> No
                                <div class="row">
                                    <label for="ceiling_attachment">Attachment</label>
                                    <input class="form-control-file" name="ceiling_attachment" type="file">
                                </div>
                            </div>
                        </div>


                        <div class="border p-3">
                            <h4>OBSERVATIONS:</h4>
                            <div class="form-group pb-2">
                                <textarea class="form-control" name="observation">{{$inspection && $inspection->observation ? $inspection->observation:''}}</textarea>
                            </div>

                            <div class="text-center">
                                <a class="btn btn-primary btn-dark" href="{{route('admin.task.show',$task->id)}}">BACK</a>
                                <input class="btn btn-primary btn-success" type="submit" name="submit" value="SUBMIT">
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
