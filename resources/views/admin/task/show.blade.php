@extends('layouts.admin')

@section('title','View Task')

@push('css')


@endpush


@section('content')
    <a href="{{route('admin.task.edit',$task->id)}}" class="btn btn-primary btn-success">Edit</a>
    <a href="{{route('admin.task.index')}}" class="btn btn-primary btn-dark">Back</a>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Task</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="r-separator">
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">ID : </span> {{$task->id}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Title : </span> {{$task->title}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Description : </span> {{$task->description}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Client : </span> {{$task->Client->name??''}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Staff : </span> {{$task->User->name??''}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->inspection_id ? 'Yes' : 'No'}}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @if($task->inspection_id && isset($task->Inspection))
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Inspection Report</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="r-separator">
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Ceiling : </span> {{$task->Inspection->ceiling ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Wall : </span> {{$task->Inspection->wall ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Floor : </span> {{$task->Inspection->floor ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Baseboard : </span> {{$task->Inspection->baseboard ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Windows Damaged : </span> {{$task->Inspection->windows_damaged ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Windows Secure : </span> {{$task->Inspection->windows_secure ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Windows Evidence : </span> {{$task->Inspection->windows_evidence? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Toilets Leaking : </span> {{$task->Inspection->toilets_leaking ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->faucets_dripping_water ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->evidence_under_sink_leak ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->unit_operational_appear ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->hvac_leaking_evidence ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->hvac_filter_change_need ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->thermostat_reading_degree}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->light_switch_working ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->smoke_detector_inspection ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->refigerator_inspection ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->stove_inspection ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->dryer_unit_inspection ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->baseboard_inspection ? 'Yes' : 'No'}}</div>
                            <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Inspected : </span> {{$task->Inspection->pest_treatment_need ? 'Yes' : 'No'}}</div>
                            <div class="p-3 mt-3">
                                <div class="row font-weight-bold mb-2">Observations :</div>
                                <div class="row">
                                    {{$task->Inspection->observation}}
                                </div>
                            </div>

                            <div class="row p-3 mt-3 d-flex justify-content-between">
                                <div class=""><span class="font-weight-bold mr-1">INSPECTED BY: </span><span><u>{{$task->User->name??''}}</u></span></div>
                                <div class=""><span class="font-weight-bold mr-1">DATE PROCESSED: </span><span><u>{{$task->created_at}}</u></span></div>
                            </div>

                            <div class="text-center">
                                <a href="" class="btn btn-primary btn-dark">Edit</a>
                                <a href="" class="btn btn-primary btn-success">Send to Client</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection


@push('script')

@endpush
