
<div class="report-data">

    <div class="row">
        <div class="title">
            CEILINGS
        </div>

        <div class="description">

            <div class="title-description">
                THE TASK IS COMPLETED ? - <span>{{$inspection->status ? 'Yes':'No'}}</span>
            </div>

            <div class="sub-description">
                {{$inspection->comment}}
            </div>

        </div>
<br>
        <div class="image-list">
            @php
                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('attachment',$task->id);
                $files = $filed->status ? $filed->files : [];
            @endphp
            @foreach($files as $file)
                <img src="{{$file['link']}}" class="image">
            @endforeach
        </div>
    </div>
</div>
