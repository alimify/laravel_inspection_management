<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        /* cyrillic */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src: local('Rubik Light'), local('Rubik-Light'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Fqj2mZ8WDm7Q.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* hebrew */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src: local('Rubik Light'), local('Rubik-Light'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Fqj2mf8WDm7Q.woff2) format('woff2');
            unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src: local('Rubik Light'), local('Rubik-Light'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Fqj2mT8WDm7Q.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src: local('Rubik Light'), local('Rubik-Light'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Fqj2md8WA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 400;
            src: local('Rubik'), local('Rubik-Regular'), url(https://fonts.gstatic.com/s/rubik/v7/iJWKBXyIfDnIV7nFrXyi0A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* hebrew */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 400;
            src: local('Rubik'), local('Rubik-Regular'), url(https://fonts.gstatic.com/s/rubik/v7/iJWKBXyIfDnIV7nDrXyi0A.woff2) format('woff2');
            unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 400;
            src: local('Rubik'), local('Rubik-Regular'), url(https://fonts.gstatic.com/s/rubik/v7/iJWKBXyIfDnIV7nPrXyi0A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 400;
            src: local('Rubik'), local('Rubik-Regular'), url(https://fonts.gstatic.com/s/rubik/v7/iJWKBXyIfDnIV7nBrXw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 500;
            src: local('Rubik Medium'), local('Rubik-Medium'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7EyjmmZ8WDm7Q.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* hebrew */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 500;
            src: local('Rubik Medium'), local('Rubik-Medium'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Eyjmmf8WDm7Q.woff2) format('woff2');
            unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 500;
            src: local('Rubik Medium'), local('Rubik-Medium'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7EyjmmT8WDm7Q.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 500;
            src: local('Rubik Medium'), local('Rubik-Medium'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Eyjmmd8WA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 700;
            src: local('Rubik Bold'), local('Rubik-Bold'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7F6iGmZ8WDm7Q.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* hebrew */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 700;
            src: local('Rubik Bold'), local('Rubik-Bold'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7F6iGmf8WDm7Q.woff2) format('woff2');
            unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 700;
            src: local('Rubik Bold'), local('Rubik-Bold'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7F6iGmT8WDm7Q.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 700;
            src: local('Rubik Bold'), local('Rubik-Bold'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7F6iGmd8WA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }







        .container {
            padding-right: 15px;
            padding-left: 15px;
            width: 600px;
            margin-right: auto;
            margin-left: auto
        }

        .h1,
        .h2,
        .h3,
        h1,
        h2,
        h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .text-center {
            text-align: center;
        }

        .h3,
        h3 {
            font-size: 24px;
        }

        p {
            margin: 0 0 10px;
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            line-height: 22px;
            color: #000000;
        }


        .fix {
            overflow: hidden;
        }

        a {
            text-decoration: none;
            color: #222222;
        }

        p {
            font-size: 16px;
            line-height: 22px;
        }

        ul li {
            list-style: none;
            margin-left: 20px;
        }

        h2 {
            color: #2ABDF2;
            font-weight: 700;
        }

        .logo img {
            min-width: 30%;
            padding-top: 80px;
        }

        .address-area {
            padding-top: 40px;
            padding-bottom: 50px;
        }

        .address-area h3 {
            font-weight: 700;
        }

        .table-content {
            font-size: 16px;
        }

        .table-content-up p {
            margin-bottom: 50px;
        }

        .inspected h2 {
            margin-bottom: 25px;
        }

        .inspect-area {
            margin: 40px 0 20px 0;
        }

        .inspect-area h4 {
            color: #000;
            font-weight: 700;
            font-size: 23px;
            margin-bottom: 25px;
        }

        .inspect-area ul {
            margin-left: 15px;
            font-size: 18px;
        }

        .inspect-area ul li h5 {
            font-size: 18px;
            font-weight: 600;
        }

        .inspect-area ul li .single-item {
            margin-left: 30px;
        }

        .single-item {
            margin-top: 10px;
            margin-bottom: 35px;
        }

        .single-item>p:first-child {
            font-weight: 600;
        }

        .single-item p {
            margin: 25px 0 15px 0;
        }

        .yes-no {
            margin-bottom: 15px;
        }

        .yes-no .active {
            background: #9cec9c;
            padding: 10px 15px;
            border: 0px solid;
            margin-right: 10px;
            font-size: 16px;
            border-radius: 3px!important;
        }

        .yes-no .no-active {
            background: rgba(241, 7, 7, 0.4);
            padding: 10px 15px;
            border: 0px solid;
            font-size: 16px;
            border-radius: 3px!important;

        }

        .intro-area p a {
            color: #2ABDF2;
            text-decoration: underline;
        }

        .mt0 {
            margin-top: 0;
        }

        .ftitle {
            font-size: 24px;
            font-weight: 700;
        }

        .inspect-area h4 {
            color: #000;
            font-weight: 500;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .inspect-area ul li h5 {
            font-size: 18px;
            font-weight: 400;
        }

        .single-item p {
            margin: 15px 0 15px 0;
            font-weight: 300 !important;
            font-size: 16px;
        }

        .yes-no {
            margin-bottom: 15px;
            overflow: hidden;
        }

        .yes-no span {
            display: inline-block;
            font-size: 14px !important;
            font-weight: 400 !important;
            width: 60px;
            text-align: center;
            padding: 5px 0 !important;
        }

        .table-content-up p {
            margin-bottom: 50px;
            font-weight: 300;
            font-size: 14px;
        }

        .image-list{
            margin-top: 10px;
            display: block!important;
        }

        .image-list .image {
            margin: 1px!important;
            width: 150px!important;
            height: 150px!important;
        }


        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
<header>
    <div class="container">
        <div class="logo text-center">
            <img src="https://condoinspection.net/front/img/pdf_logo.png" alt="">
        </div>
        <div class="address-area text-center bold ">
            <h3>Inspection Report<br>For<br> {{$task->Client->name??''}}</h3>
            <h3>{{$task->Client->address}}</h3>
        </div>

        <div class="table-content-up">
            <p>Report Date: {{Carbon\Carbon::now()->format('F d, Y')}}</p>
        </div>
    </div>

</header>

<div class="page-break"></div>

<!-- table contents area start -->
<section class="table-content">
    <div class="container">
        <div class="logo text-center">
            <img src="https://condoinspection.net/front/img/pdf_logo.png" alt="">
        </div>
        <div class="table-content">
            <h2 class="ftitle">Table of Contents</h2>
            <p>Introduction</p>
            <p>Inspected Areas:</p>
            <ul>
                <li>1. Structure
                    <ul class="in-structure">
                        <li>a. Ceilings</li>
                        <li>b. Walls </li>
                        <li>c. Floors</li>
                        <li>d. Baseboard</li>
                        <li>e. Windows/Sliding Glass Doors</li>
                    </ul>
                </li>
                <li>2. Plumbing</li>
                <li>3. HVAC</li>
                <li>4. Electrical</li>
                <li>5. Life Safety</li>
                <li>6. Major Appliances</li>
                <li>7. Pest</li>
                <li>8. Ovservations</li>
            </ul>
        </div>
    </div>
</section>
<!-- table contents area end -->
<div class="page-break"></div>

<!-- Introduction area start-->
<section class="introduction">
    <div class="container">
        <div class="logo text-center">
            <img src="https://condoinspection.net/front/img/pdf_logo.png" alt="">
        </div>
        <div class="intro-area">
            <h2 class="ftitle">Introduction</h2>
            <p>The visual inspection is limited to the following readily accessible installed systems and components within the boundaries of your unit: walls, flooring, ceiling, electrical fixtures, HVAC, appliances, plumbing, interior components, and site conditions that affect the structure, for the purposes of providing a general observation on the overall condition of the unit.</p>
            <p>Should you have any questions or concerns, please do not hesitate to call us at (754) 971-2837 or email us at <a href="mailto:ChoreMaids@gmail.com">ChoreMaids@gmail.com.</a>
            </p>
        </div>
    </div>
</section>

<div class="page-break"></div>

<!-- Introduction area end-->
<!-- Inspected area start-->
<section class="inspected">
    <div class="container">
        <div class="logo text-center">
            <img src="https://condoinspection.net/front/img/pdf_logo.png" alt="">
        </div>
        <h2 class="ftitle">Inspected Areas:</h2>
        <div class="inspect-area mt0">
            <h4>1.  Structure:</h4>
            <ul>
                <li><h5>A.    Ceilings </h5>
                    <div class="single-item">
                        <p>A. Signs of Water Intrusion or Damage:</p>
                        <div class="yes-no">
                            <span class="{{$inspection->ceiling ? 'active' : 'no-active'}}">Yes</span>
                            <span class="{{!$inspection->ceiling ? 'active' : 'no-active'}}">No</span>
                        </div>
                        <p><span style="font-weight: 400;">Comments: </span> {{$inspection->ceiling_text??''}}</p>
                        <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
                </li>
                <li><h5>B.    Walls </h5>
                    <div class="single-item">
                        <p>A. Signs of Water Intrusion or Damage:</p>
                        <div class="yes-no">
                            <span class="{{$inspection->walls ? 'active' : 'no-active'}}">Yes</span>
                            <span class="{{!$inspection->walls ? 'active' : 'no-active'}}">No</span>
                        </div>
                        <p><span style="font-weight: 400;">Comments: </span> {{$inspection->walls_text??''}}</p>
                        <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
                </li>
                <li><h5>C.  Floors</h5>
                    <div class="single-item">
                        <p>A. Signs of Water Intrusion or Damage:</p>
                        <div class="yes-no">
                            <span class="{{$inspection->floors ? 'active' : 'no-active'}}">Yes</span>
                            <span class="{{!$inspection->floors ? 'active' : 'no-active'}}">No</span>
                        </div>
                        <p><span style="font-weight: 400;">Comments: </span> {{$inspection->floors_text??''}}</p>
                        <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
                </li>
                <li><h5>D.  Baseboards</h5>
                    <div class="single-item">
                        <p>A. Signs of Water Intrusion or Damage:</p>
                        <div class="yes-no">
                            <span class="{{$inspection->baseboard ? 'active' : 'no-active'}}">Yes</span>
                            <span class="{{!$inspection->baseboard ? 'active' : 'no-active'}}">No</span>
                        </div>
                        <p><span style="font-weight: 400;">Comments: </span> {{$inspection->baseboard_text??''}}</p>
                        <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
                </li>

                <li><h5>E.  Windows/Sliding Glass Doors</h5>
                    <div class="single-item">
                        <p>A. Any Signs of Damage?</p>
                        <div class="yes-no">
                            <span class="{{$inspection->windows_damaged ? 'active' : 'no-active'}}">Yes</span>
                            <span class="{{!$inspection->windows_damaged ? 'active' : 'no-active'}}">No</span>
                        </div>
                        <p><span style="font-weight: 400;">Comments: </span> {{$inspection->windows_damaged_text??''}}</p>
                        <p><span style="font-weight: 400;">Attachment(s):</span></p><br/>
                        <div class="image-list">
                            @php
                                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('windows_damaged',$task->id);
                                $files = $filed->status ? $filed->files : [];
                            @endphp
                            @foreach($files as $file)
                                <img src="{{$file['link']}}" class="image">
                            @endforeach
                        </div>

                    </div>

                    <div class="single-item">
                        <p>B. Secured?</p>
                        <div class="yes-no">
                            <span class="{{$inspection->windows_secured ? 'active' : 'no-active'}}">Yes</span>
                            <span class="{{!$inspection->windows_secured ? 'active' : 'no-active'}}">No</span>
                        </div>
                        <p><span style="font-weight: 400;">Comments: </span> {{$inspection->windows_secured_text??''}}</p>
                        <p><span style="font-weight: 400;">Attachment(s):</span></p><br>

                        <div class="image-list">
                            @php
                                $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('windows_secured',$task->id);
                                $files = $filed->status ? $filed->files : [];
                            @endphp
                            @foreach($files as $file)
                                <img src="{{$file['link']}}" class="image">
                            @endforeach
                        </div>

                    </div>
                    <div class="single-item">
                        <p>C. Signs of Water Intrusion or Damage:</p>
                        <div class="yes-no">
                            <span class="{{$inspection->windows_evidence ? 'active' : 'no-active'}}">Yes</span>
                            <span class="{{!$inspection->windows_evidence ? 'active' : 'no-active'}}">No</span>
                        </div>
                        <p><span style="font-weight: 400;">Comments: </span> {{$inspection->windows_evidence_text??''}}</p>
                        <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
                </li>
            </ul>
        </div>

        <div class="inspect-area">
            <h4 class="plumb">2.  Plumbing:</h4>
            <div class="single-item">
                <p>A. Toilets Leaking?</p>
                <div class="yes-no">
                    <span class="{{$inspection->toilets_leak ? 'active' : 'no-active'}}">Yes</span>
                    <span class="{{!$inspection->toilets_leak ? 'active' : 'no-active'}}">No</span>
                </div>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->toilets_leak_text??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
            <div class="single-item">
                <p>B. Faucets Dripping Water?</p>
                <div class="yes-no">
                    <span class="{{$inspection->faucets_dripping_water ? 'active' : 'no-active'}}">Yes</span>
                    <span class="{{!$inspection->faucets_dripping_water ? 'active' : 'no-active'}}">No</span>
                </div>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->faucets_dripping_water_text??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
            <div class="single-item">
                <p>C. Indications of Any Leaks Under Sink?</p>
                <div class="yes-no">
                    <span class="{{$inspection->evidence_leak_under_sink ? 'active' : 'no-active'}}">Yes</span>
                    <span class="{{!$inspection->evidence_leak_under_sink ? 'active' : 'no-active'}}">No</span>
                </div>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->evidence_leak_under_sink_text??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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


        <div class="inspect-area">
            <h4>3.  HVAC:</h4>
            <div class="single-item">
                <p>A. Unit Appears Operational?</p>
                <div class="yes-no">
                    <span class="{{$inspection->unit_operational ? 'active' : 'no-active'}}">Yes</span>
                    <span class="{{!$inspection->unit_operational ? 'active' : 'no-active'}}">No</span>
                </div>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->unit_operational_text??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
            <div class="single-item">
                <p>B. Any Signs of Leaking?</p>
                <div class="yes-no">
                    <span class="{{$inspection->hvac_evidence ? 'active' : 'no-active'}}">Yes</span>
                    <span class="{{!$inspection->hvac_evidence ? 'active' : 'no-active'}}">No</span>
                </div>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->hvac_evidence_text??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
            <div class="single-item">
                <p>C. Does the Filter Need to be Changed?</p>
                <div class="yes-no">
                    <span class="{{$inspection->hvac_filter_change_need ? 'active' : 'no-active'}}">Yes</span>
                    <span class="{{!$inspection->hvac_filter_change_need ? 'active' : 'no-active'}}">No</span>
                </div>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->hvac_filter_change_need_text??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
            <div class="single-item">
                <p>D. Thermostat Reading at the Time of Inspection</p>
                <p>____{{$inspection->thermostat_degree_reading??''}}_____ Degrees</p>
            </div>
        </div>


        <div class="inspect-area">
            <h4>4.  Electrical:</h4>
            <div class="single-item">
                <p>A. Light Switches Functional?</p>
                <div class="yes-no">
                    <span class="{{$inspection->electrical_light_switch ? 'active' : 'no-active'}}">Yes</span>
                    <span class="{{$inspection->electrical_light_switch ? 'active' : 'no-active'}}">No</span>
                </div>
                <p><span style="font-weight: 400;">Comments: </span>{{$inspection->electrical_light_switch_text??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
        </div>
        <div class="inspect-area">
            <h4>5.  Life Safety:</h4>
            <div class="single-item">
                <p>A. Smoke Detector(s) Functional?</p>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->smoke_detector??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
        </div>



        <div class="inspect-area">
            <h4>6.  Major Appliances:</h4>
            <div class="single-item">
                <p>A. Refrigerator</p>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->major_refigerator??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
                <div class="image-list">
                    @php
                        $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('major_refigerator',$task->id);
                        $files = $filed->status ? $filed->files : [];
                    @endphp
                    @foreach($files as $file)
                        <img src="{{$file['link']}}" class="image">
                    @endforeach
                </div>
            </div>

            <div class="single-item">
                <p>B. Stove</p>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->major_stove??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
                <div class="image-list">
                    @php
                        $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('major_stove',$task->id);
                        $files = $filed->status ? $filed->files : [];
                    @endphp
                    @foreach($files as $file)
                        <img src="{{$file['link']}}" class="image">
                    @endforeach
                </div>
            </div>

            <div class="single-item">
                <p>C. Washer/Dryer</p>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->major_washer??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
                <div class="image-list">
                    @php
                        $filed = (object) \App\Http\Controllers\AttachmentController::getListInFiles('major_washer',$task->id);
                        $files = $filed->status ? $filed->files : [];
                    @endphp
                    @foreach($files as $file)
                        <img src="{{$file['link']}}" class="image">
                    @endforeach
                </div>
            </div>

            <div class="single-item">
                <p>D. BASEBOARD</p>
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->major_baseboard??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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

        </div>


        <div class="inspect-area">
            <h4>7.  Pests:</h4>
            <div class="single-item">
                <p>A. Observed?</p>
                <div class="yes-no">
                    <span class="{{$inspection->pest_treatment ? 'active' : 'no-active'}}">Yes</span>
                    <span class="{{!$inspection->pest_treatment ? 'active' : 'no-active'}}">No</span>
                </div>
                <p><span style="font-weight: 400;">Comments: </span>  {{$inspection->pest_treatment_text??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
        </div>


        <div class="inspect-area">
            <h4>8.  Additional Observations:</h4>
            <div class="single-item">
                <p><span style="font-weight: 400;">Comments: </span> {{$inspection->observation??''}}</p>
                <p><span style="font-weight: 400;">Attachment(s):</span></p><br>
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
    </div>
</section>
<!-- Inspected area end-->
</body>

</html>
