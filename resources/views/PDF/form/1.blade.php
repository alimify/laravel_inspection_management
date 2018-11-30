
<div class="report-data">
    <div class="header-content">
        <div class="report-title">STRUCTURE</div>
        <div class="report-description">Reports of structure.</div>
    </div>

    <div class="row">
        <div class="title">
            CEILINGS
        </div>

        <div class="description">

            <div class="title-description">
                EVIDENCE OF WATER INTRUSION/DAMAGE? - <span>{{$inspection->ceiling ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->ceiling_text??''}}
            </div>

        </div>
        <br/>
        <div class="image-list">
                @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('ceiling',$task->id);
                $files = $filed->status ? $filed->files : [];
                @endphp
                @foreach($files as $file)
                    <img src="{{$file['link']}}" class="image"/>
                @endforeach
        </div>
    </div>


    <div class="row">
        <div class="title">
            WALLS
        </div>

        <div class="description">

            <div class="title-description">
                EVIDENCE OF WATER INTRUSION/DAMAGE? - <span>{{$inspection->walls ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->walls_text??''}}
            </div>

        </div>
        <br/>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('walls',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>


    <div class="row">
        <div class="title">
            FLOORS
        </div>

        <div class="description">

            <div class="title-description">
                EVIDENCE OF WATER INTRUSION/DAMAGE? - <span>{{$inspection->floors ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->floors_text??''}}
            </div>

        </div>
        <br/>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('floors',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>


    <div class="row">
        <div class="title">
            BASEBOARDS
        </div>

        <div class="description">

            <div class="title-description">
                EVIDENCE OF WATER INTRUSION/DAMAGE? - <span>{{$inspection->baseboard ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->baseboard_text??''}}
            </div>

        </div>
        <br/>
        <div class="image-list">
                @php
                    $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('baseboard',$task->id);
                    $files = $filed->status ? $filed->files : [];
                @endphp
                @foreach($files as $file)
                    <img src="{{$file['link']}}" class="image">
                @endforeach
        </div>
    </div>


    <div class="row">
        <div class="title">
            WINDOWS/SLINDING GLASS DOORS:
        </div>

        <div class="description">

            <div class="title-description">
                DAMAGED? - <span>{{$inspection->windows_damaged ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->windows_damaged_text??''}}
            </div>

        </div>
        <br/>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('windows_damaged',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>



        <div class="description">

            <div class="title-description">
                SECURED? - <span>{{$inspection->windows_secured ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->windows_secured_text??''}}
            </div>

        </div>
<br/>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('windows_secured',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>



        <div class="description">

            <div class="title-description">
                EVIDENCE OF WATER INTRUSION? - <span>{{$inspection->windows_evidence ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->windows_evidence_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('windows_evidence',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>

    </div>

</div>


<div class="report-data">
    <div class="header-content">
        <div class="report-title">PLUMBING</div>
        <div class="report-description">Reports of PLUMBING.</div>
    </div>

    <div class="row">

        <!--<div class="title">
            WALLS
        </div>-->

        <div class="description">

            <div class="title-description">
                TOILETS LEAKING? - <span>{{$inspection->toilets_leak ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->toilets_leak_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('toilets_leak',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>



    <div class="row">

        <!--<div class="title">
            WALLS
        </div>-->

        <div class="description">

            <div class="title-description">
                FAUCETS DRIPPING WATER? - <span>{{$inspection->faucets_dripping_water ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->faucets_dripping_water_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('faucets_dripping_water',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>




    <div class="row">

        <!--<div class="title">
            WALLS
        </div>-->

        <div class="description">

            <div class="title-description">
                EVIDENCE OF ANY LEAKS UNDER SINKS? - <span>{{$inspection->evidence_leak_under_sink ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->evidence_leak_under_sink_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('evidence_leak_under_sink',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>



</div>


<div class="report-data">
    <div class="header-content">
        <div class="report-title">HVAC</div>
        <div class="report-description">Reports of HVAC.</div>
    </div>

    <div class="row">

        <!--<div class="title">
            WALLS
        </div>-->

        <div class="description">

            <div class="title-description">
                DOES UNIT APPEAR TO BE OPERATIONAL? - <span>{{$inspection->unit_operational ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->unit_operational_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('unit_operational',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>


    <div class="row">

        <!--<div class="title">
            WALLS
        </div>-->

        <div class="description">

            <div class="title-description">
                EVIDENCE OF LEAKING? - <span>{{$inspection->hvac_evidence ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->hvac_evidence_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('hvac_evidence',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>



    <div class="row">

        <!--<div class="title">
            WALLS
        </div>-->

        <div class="description">

            <div class="title-description">
                DOES THE FILTER NEED TO BE CHANGED? - <span>{{$inspection->hvac_filter_change_need ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->hvac_filter_change_need_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('hvac_filter_change_need',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="description">

            <div class="title-description">
                THERMOSTAT READING AT THE TIME OF INSPECTION -
                <span>{{$inspection->thermostat_degree_reading??''}}</span>
                DEGREES
            </div>
        </div>
    </div>


    <div class="row">
        <div class="title">
            ELECTRICAL
        </div>

        <div class="description">

            <div class="title-description">
                LIGHT SWITCHES: ARE THEY WORKING? - <span>{{$inspection->electrical_light_switch ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->electrical_light_switch_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('electrical_light_switch',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>



    <div class="row">
        <div class="title">
            LIFE SAFETY
        </div>

        <div class="description">

            <div class="title-description">
                SMOKE DETECTOR
            </div>

            <div class="sub-description">
                {{$inspection->smoke_detector??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('smoke_detector',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>



    <div class="row">
        <div class="title">
            MAJOR APPLIIANCES
        </div>

        <div class="description">

            <div class="title-description">
                REFIGERATOR
            </div>

            <div class="sub-description">
                {{$inspection->major_refigerator??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('major_refigerator',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>


        <div class="description">

            <div class="title-description">
                STOVE
            </div>

            <div class="sub-description">
                {{$inspection->major_stove??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('major_stove',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>


        <div class="description">

            <div class="title-description">
                WASHER/DRYER UNITS
            </div>

            <div class="sub-description">
                {{$inspection->major_washer??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('major_washer',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>


        <div class="description">

            <div class="title-description">
                BASEBOARD
            </div>

            <div class="sub-description">
                {{$inspection->major_baseboard??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('major_baseboard',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>

    </div>


    <div class="row">
        <div class="title">
            PEST
        </div>

        <div class="description">

            <div class="title-description">
                TREATMENT NEEDED? - <span>{{$inspection->pest_treatment ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->pest_treatment_text??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('pest_treatment',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>


    <div class="row">
        <div class="title">
            OBSERVATIONS
        </div>

        <div class="description">

           <!-- <div class="title-description">
                TREATMENT NEEDED? - <span>No</span>
            </div>-->

            <div class="sub-description">
                {{$inspection->observation??''}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('observation',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>


</div>
