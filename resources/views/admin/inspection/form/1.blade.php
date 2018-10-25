<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Report</h4>
                <h6 class="card-subtitle"></h6>
                <div class="r-separator">

                    <div class="border p-3">
                        <h4>STRUCTURE:</h4>


                        <div class="form-group pb-2">
                            <label for="title">CEILINGS</label>
                            <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?    -   <span class="font-weight-bold">{{$inspection->ceiling ? 'Yes':'No'}}</span></h6>
                        </div>


                        <div class="form-group pb-2">
                            <label for="title">WALLS</label>
                            <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?    -  <span class="font-weight-bold">{{$inspection->walls ? 'Yes':'No'}}</span></h6>
                        </div>

                        <div class="form-group pb-2">
                            <label for="title">FLOORS</label>
                            <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?    -  <span class="font-weight-bold">{{$inspection->floors ? 'Yes':'No'}}</span></h6>
                        </div>


                        <div class="form-group pb-2">
                            <label for="title">BASEBOARDS</label>
                            <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?  - <span class="font-weight-bold">{{$inspection->baseboard ? 'Yes':'No'}}</span></h6>
                        </div>



                        <div class="form-group pb-2">
                            <label for="title">WINDOWS/SLINDING GLASS DOORS:</label>
                            <h6>DAMAGED?  - <span class="font-weight-bold">{{$inspection->windows_damaged ? 'Yes':'No'}}</span></h6>

                            <h6>SECURED? - <span class="font-weight-bold">{{$inspection->windows_secured ? 'Yes':'No'}}</span></h6>

                            <h6>EVIDENCE OF WATER INTRUSION? - <span class="font-weight-bold">{{$inspection->windows_evidence ? 'Yes':'No'}}</span></h6>
                        </div>
                    </div>



                    <div class="border p-3">
                        <h4>PLUMBING:</h4>


                        <div class="form-group pb-2">
                            <h6>TOILETS LEAKING?  - <span class="font-weight-bold">{{$inspection->toilets_leak ? 'Yes':'No'}}</span></h6>
                        </div>

                        <div class="form-group pb-2">
                            <h6>FAUCETS DRIPPING WATER?  - <span class="font-weight-bold">{{$inspection->faucets_dripping_water ? 'Yes':'No'}}</span></h6>
                        </div>


                        <div class="form-group pb-2">
                            <h6>EVIDENCE OF ANY LEAKS UNDER SINKS?  - <span class="font-weight-bold">{{$inspection->evidence_leak_under_sink ? 'Yes':'No'}}</span></h6>
                         </div>
                    </div>




                    <div class="border p-3">
                        <h4>HVAC:</h4>


                        <div class="form-group pb-2">
                            <h6>DOES UNIT APPEAR TO BE OPERATIONAL?  - <span class="font-weight-bold">{{$inspection->unit_operational ? 'Yes':'No'}}</span></h6>
                        </div>

                        <div class="form-group pb-2">
                            <h6>EVIDENCE OF LEAKING?  - <span class="font-weight-bold">{{$inspection->hvac_evidence ? 'Yes':'No'}}</span></h6>
                        </div>


                        <div class="form-group pb-2">
                            <h6>DOES THE FILTER NEED TO BE CHANGED?  - <span class="font-weight-bold">{{$inspection->hvac_filter_change_need ? 'Yes':'No'}}</span></h6>
                        </div>


                        <div class="form-group pb-2">
                            <h6>THERMOSTAT READING AT THE TIME OF INSPECTION  - <span class="font-weight-bold">{{$inspection->thermostat_degree_reading??''}} </span>DEGREES</h6>
                        </div>


                    </div>


                    <div class="border p-3">
                        <h4>ELECTRICAL:</h4>

                        <div class="form-group pb-2">
                            <h6>LIGHT SWITCHES: ARE THEY WORKING?  - <span class="font-weight-bold">{{$inspection->electrical_light_switch ? 'Yes':'No'}}</span></h6>
                        </div>

                    </div>


                    <div class="border p-3">
                        <h4>LIFE SAFETY:</h4>


                        <div class="form-group pb-2">
                            <label for="title" class="d-block">SMOKE DETECTOR</label>
                            {{$inspection->smoke_detector??''}}
                        </div>
                    </div>



                    <div class="border p-3">
                        <h4>MAJOR APPLIIANCES:</h4>
                        <div class="form-group pb-2">
                            <label for="title" class="d-block">REFIGERATOR</label>
                            {{$inspection->major_refigerator??''}}

                        </div>
                        <div class="form-group pb-2">
                            <label for="title" class="d-block">STOVE</label>
                            {{$inspection->major_stove??''}}
                        </div>

                        <div class="form-group pb-2">
                            <label for="title" class="d-block">WASHER/DRYER UNITS </label>
                            {{$inspection->major_washer??''}}
                        </div>

                        <div class="form-group pb-2">
                            <label for="title" class="d-block">BASEBOARD</label>
                            {{$inspection->major_baseboard??''}}
                        </div>


                    </div>


                    <div class="border p-3">
                        <h4>PEST:</h4>
                        <div class="form-group pb-2">
                            <h6>TREATMENT NEEDED?  - <span class="font-weight-bold">{{$inspection->pest_treatment ? 'Yes':'No'}}</span></h6>
                        </div>
                    </div>


                    <div class="border p-3">
                        <h4>OBSERVATIONS:</h4>
                        <div class="form-group pb-2">
                            {{$inspection->observation??''}}
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

