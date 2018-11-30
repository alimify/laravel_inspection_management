
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ATTACHMENT</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                    <input type="file" name="file" class="form-control-file form-control form-inline" id="upload-file">
                <div class="progress mb-3">
                    <div id="upload-progress-bar" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%;display: none;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="filelist col-sm-6 col-md-8 border">

                        </div>

                        <div class="col-sm-6 col-md-4 border border-left-0 text-center filepreview">
                            <img src="{{asset('storage/site/nopreview.jpg')}}" alt="" class="img-thumbnail d-block img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
<style>
    @media only screen and (min-width: 680px) {
        .modal-width {
            max-width: 80%;
        }
    }
    .filelist{
        min-height: 400px;
    }
    .mt-150{
        margin-top: 150px;
    }
    .fileclick:hover,.activefile {
        background: skyblue;
    }
</style>

<script>
    $( document ).ready(function() {
        var dir = '',
            fileslist = [],
            currentfile = '';

        $(".attachment-modal").click(function () {
            dir = this.dataset.src
            filelistfetch()
            defaultFilePreview()
            $("#responsive-modal").modal('show')
        })

        $("#upload-file").change(function () {
            const file = $("#upload-file")[0].files[0];

            if(file){
                var form = new FormData();
                form.append('file',file)
                form.append('dir',dir)
                form.append('_token',`{{csrf_token()}}`)
                form.append('_method','POST')
                $.ajax({
                    url: `{{route('attachment.upload',$task->id)}}`.replace(`{{url('/')}}`,''),
                    type: "POST",
                    data:  form,
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend : function()
                    {

                    },
                    success: function(data)
                    {
                         //console.log(data)
                        setTimeout(function () {
                            $('#upload-progress-bar').css('display','none')
                            $('#upload-progress-bar').css('width','0%')
                            $("#upload-file").val('')
                        }, 1000);
                        filelistfetch()

                    },
                    error: function(e)
                    {
                       //console.log(e)
                    },
                    xhr: function () {
                        var xhr = $.ajaxSettings.xhr();

                        xhr.upload.onprogress = function (e) {
                            // For uploads
                            if (e.lengthComputable) {
                                //console.log((e.loaded / e.total)*100);
                                $('#upload-progress-bar').css('display','')
                                $('#upload-progress-bar').css('width',(e.loaded / e.total)*100+'%')
                            }
                        };
                        return xhr;
                    }
                });
            }
        })

        var prevActiveFile = '',
            currActiveFile = '';

        $("body").on('click','.fileclick',function () {
            currentfile = this.dataset.id
            currActiveFile = $(this)
            $(prevActiveFile).removeClass('activefile')
            $(currActiveFile).addClass('activefile')
            prevActiveFile = $(this)
            previewFile()
        })


        $("body").on('click','.delete-attachment',function () {

            form = new FormData()
            form.append('_token',`{{csrf_token()}}`)
            form.append('_method','POST')
            form.append('file',this.dataset.src.replace(`{{url('/')}}`,''))

            $.ajax({
                url: `{{route('attachment.delete',$task->id)}}`.replace(`{{url('/')}}`,''),
                type: "POST",
                data:  form,
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function()
                {

                },
                success: function(data)
                {
                    if(data.status){
                        filelistfetch()
                    }
                   console.log(data)
                },
                error: function(e)
                {
                    //console.log(e)
                },
                xhr: function () {
                    var xhr = $.ajaxSettings.xhr();

                    xhr.upload.onprogress = function (e) {
                        // For uploads
                        if (e.lengthComputable) {
                            //console.log((e.loaded / e.total)*100);
                        }
                    };
                    return xhr;
                }
            });
        })



        function filelistfetch() {

            $.ajax({
                url: `{{route('attachment.list',$task->id)}}`.replace(`{{url('/')}}`,'')+'?dir='+dir,
                type: "GET",
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function()
                {

                },
                success: function(data)
                {
                    if(data.status){
                        fileslist = data.files
                        printFiles()
                    }
                   // console.log(data)
                },
                error: function(e)
                {
                    //console.log(e)
                },
                xhr: function () {
                    var xhr = $.ajaxSettings.xhr();

                    xhr.upload.onprogress = function (e) {
                        // For uploads
                        if (e.lengthComputable) {
                            //console.log((e.loaded / e.total)*100);
                        }
                    };
                    return xhr;
                }
            });
        }

        function printFiles() {
            defaultFilePreview()
            var html = '';
            fileslist.forEach(function (f,i) {
                //console.log(f)
                html+= `<a class="row border-top p-2 fileclick" href="javascript:void(0)" data-src="${f.link}" data-id="${i}">${f.name}</a>`
            })

            if(!html){
                html+= `<div class="text-center mt-150">No Attachment Available !</div>`
            }

            $("#responsive-modal .modal-body .container-fluid .filelist").html(html)
        }

        function previewFile() {
            var file = fileslist[currentfile],
                html = '',
                previewlink = '';

            if(file){
                previewlink = file.ext == 'jpg' || file.ext == 'jpeg' || file.ext == 'png' || file.ext == 'gif' ?
                    file.link : `{{asset('storage/site/nopreview.jpg')}}`;
                html+= `
                            <img src="${previewlink}" alt="" class="img-thumbnail d-block img-responsive">
                            <div class="text-muted d-block">${file.date}</div>
                            <div class="d-block">${file.name}</div>
                            <a href="${file.link}" class="btn btn-success">DOWNLOAD</a>
                            <a href="javascript:void(0)" data-src="${file.link}" class="btn btn-danger delete-attachment">DELETE</a>
                            `;
                $("#responsive-modal .modal-body .container-fluid .filepreview").html(html)

            }else{
                defaultFilePreview()
            }

        }

        function jsUcfirst(string)
        {
            const l = string.replace(/[^a-zA-Z ]/g, " ");
            return l.replace(/(^|\s)[a-z]/g,function(f){return f.toUpperCase();})
        }
        function defaultFilePreview() {
            const html = `<img src="{{asset('storage/site/nopreview.jpg')}}" alt="" class="img-thumbnail d-block img-responsive">`
            $("#responsive-modal .modal-body .container-fluid .filepreview").html(html)

        }
    })
</script>
