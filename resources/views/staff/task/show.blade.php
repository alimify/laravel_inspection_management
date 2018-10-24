@extends('layouts.staff')

@section('title','View Task')

@push('css')


@endpush


@section('content')
    <a href="" class="btn btn-primary btn-success"></a>
    <a href="{{route('staff.task.index')}}" class="btn btn-primary btn-dark">Back</a>

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
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Phone : </span> {{$task->Client->phone??''}}</div>
                        <div class="row border-bottom p-3"><span class="mr-3 font-weight-bold">Status : </span> <span class="{{$task->Status->class??''}}">{{$task->Status->title??''}}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Report</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="r-separator">
                        <form action="" method="POST">
                            <div class="border p-3">
                                <h4>STRUCTURE:</h4>


                                <div class="form-group pb-2">
                                    <label for="title">CEILINGS</label>
                                    <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>


                                <div class="form-group pb-2">
                                    <label for="title">WALLS</label>
                                    <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="walls" name="walls"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="walls" name="walls"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="walls_attachment" type="file">
                                    </div>
                                </div>

                                <div class="form-group pb-2">
                                    <label for="title">FLOORS</label>
                                    <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="floors" name="floors"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="floors" name="floors"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="floors_attachment" type="file">
                                    </div>
                                </div>


                                <div class="form-group pb-2">
                                    <label for="title">BASEBOARDS</label>
                                    <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="baseboards" name="baseboards"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="baseboads" name="baseboards"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="baseboards_attachment" type="file">
                                    </div>
                                </div>



                                <div class="form-group pb-2">
                                    <label for="title">CEILINGS</label>
                                    <h6>EVIDENCE OF WATER INTRUSION/DAMAGE?</h6>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>



                                <div class="form-group pb-2">
                                    <label for="title">WINDOWS/SLINDING GLASS DOORS:</label>
                                    <h6>DAMAGED?</h6>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row mt-2 mb-2">
                                        <small>Attachment</small>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>

                                    <h6>SECURED?</h6>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                     <div class="row mt-2 mb-2">
                                         <small>Attachment</small>
                                         <input class="form-control-file" name="ceiling_attachment" type="file">
                                     </div>

                                    <h6>EVIDENCE OF WATER INTRUSION?</h6>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
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
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>

                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">FAUCETS DRIPPING WATER?</label>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>


                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">EVIDENCE OF ANY LEAKS UNDER SINKS?</label>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>

                            </div>




                            <div class="border p-3">
                                <h4>HVAC:</h4>


                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">TOILETS LEAKING?</label>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>

                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">FAUCETS DRIPPING WATER?</label>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>


                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">EVIDENCE OF ANY LEAKS UNDER SINKS?</label>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>

                            </div>


                            <div class="border p-3">
                                <h4>ELECTRICAL:</h4>

                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">TOILETS LEAKING?</label>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>

                            </div>


                            <div class="border p-3">
                                <h4>LIFE SAFETY:</h4>


                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">TOILETS LEAKING?</label>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>
                            </div>



                            <div class="border p-3">
                                <h4>MAJOR APPLIIANCES:</h4>
                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">REFIGERATOR</label>
                                    <select class="form-control">
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                        <option value="">Option 3</option>
                                        <option value="">Option 4</option>
                                    </select>
                                </div>
                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">STOVE</label>
                                    <select class="form-control">
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                        <option value="">Option 3</option>
                                        <option value="">Option 4</option>
                                    </select>
                                </div>

                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">WASHER/DRYER UNITS </label>
                                    <select class="form-control">
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                        <option value="">Option 3</option>
                                        <option value="">Option 4</option>
                                    </select>
                                </div>

                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">BASEBOARD</label>
                                    <select class="form-control">
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                        <option value="">Option 3</option>
                                        <option value="">Option 4</option>
                                    </select>
                                </div>


                            </div>


                            <div class="border p-3">
                                <h4>PEST:</h4>
                                <div class="form-group pb-2">
                                    <label for="title" class="d-block">TREATMENT NEEDED?</label>
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> Yes
                                    <input type="radio" class="form-check form-check-inline ml-2" id="ceiling" name="ceiling"> No
                                    <div class="row">
                                        <label for="ceiling_attachment">Attachment</label>
                                        <input class="form-control-file" name="ceiling_attachment" type="file">
                                    </div>
                                </div>
                            </div>


                            <div class="border p-3">
                                <h4>OBSERVATIONS:</h4>
                                <div class="form-group pb-2">
                                    <textarea class="form-control"></textarea>
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

@endsection


@push('script')

@endpush
