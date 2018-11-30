<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hi</title>
<style>
    .header-content{
        margin-bottom: 10px;
        display: block!important;
    }
    .report-title{
        padding: 0!important;
        margin: 0!important;
        color: lightskyblue;
        font-weight: bold;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
        display: block!important;
    }
    .title{
        color: lightskyblue;
        font-weight: bold;
        font-family: "Courier New", Courier, monospace;
        font-size: 20px;
        display: block!important;
    }

    .row{
        margin-top: 10px;
        display: block!important;
    }
    .description .title-description {
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        text-transform: uppercase;
        font-size: 13px;
        margin-top: 5px;
        display: block!important;
    }
    .description .title-description span {
        font-weight: bold;
        display: block!important;
    }

    .description .sub-description {
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        font-size: 11px;
        margin-left: 5px;
        display: block!important;
    }

    .image-list{
        margin-top: 10px;
        display: block!important;
    }

    .image-list .image {
        margin:1px;
        width: 150px;
        height: 150px;
    }

    .page-break {
        page-break-after: always;
    }

</style>
</head>

<body>
<div class="header-content">
    <div class="report-title">Introduction</div>
    <div class="report-description">{{$task->description}}</div>

    <div class="report-title">Reports</div>
    <div class="report-description">Please review the reports and confirm us.</div>
</div>


@if($inspection)
    <div class="report-content">
    @includeIf('PDF.form.'.$task->category_id)
@includeWhen(!View::exists('PDF.form.'.$task->category_id),'PDF.form.default')
    </div>

@endif
</body>

</html>
