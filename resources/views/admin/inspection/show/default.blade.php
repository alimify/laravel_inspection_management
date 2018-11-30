<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Report</h4>
                <h6 class="card-subtitle"></h6>
                <div class="r-separator">

                    <div class="border p-3">
                        <h6>THE TASK IS COMPLETED ? -   <span class="font-weight-bold">{{$inspection->status ? 'Yes':'No'}}</span> </h6>
                        <div class="text-muted">{{$inspection->comment}}</div>
                        <div class="row">
                            <input class="btn btn-dark attachment-modal" value="ATTACHMENT" type="button" data-src="attachment" {{!($attachment->attachment??false) ? 'disabled' : ''}}>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <a href="{{route('admin.inspection.edit',$task->id)}}" class="btn btn-dark">EDIT</a> <a href="{{route('admin.inspection.sendToClient',$task->id)}}" class="btn btn-success">Send To Client</a>
</div>
