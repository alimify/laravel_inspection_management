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

                        <div class="form-group pb-2">
                            <h6>THE TASK IS COMPLETED ?</h6>
                            <input type="radio" class="form-check form-check-inline ml-2" id="status" name="status" value="1" {{$inspection && $inspection->status ? 'checked':''}}> Yes
                            <input type="radio" class="form-check form-check-inline ml-2" id="status" name="status" value="2" {{$inspection && !$inspection->status ? 'checked':''}}> No
                            <div class="row">
                                <textarea class="form-control mb-2" name="comment">{{$inspection->comment??''}}</textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <input class="btn btn-primary btn-success" type="submit" name="submit" value="SUBMIT">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
