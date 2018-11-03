@extends('layouts.admin')

@section('title','Dashboard')

@push('css')
    <!-- Custom CSS -->
    <link href="{{asset('backend/'.'assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/'.'assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
@endpush


@section('content')

        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-basket font-20 text-info"></i>
                                <p class="font-16 m-b-5">Task</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0">{{$tasks->count()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-account-alert font-20 text-success"></i>
                                <p class="font-16 m-b-5">Request</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0">{{$requests->count()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="fa fa-users font-20 text-purple"></i>
                                <p class="font-16 m-b-5">Clients</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0">{{$clients->count()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="fa fa-user-secret font-20 text-danger"></i>
                                <p class="font-16 m-b-5">Staff</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0">{{$staffs->count()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->





        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">This Year</h4>
                            </div>
                            <div class="ml-auto">
                                <h6 class="text-muted">Task Completed</h6>
                            </div>
                            <div class="ml-auto">
                                <div class="dl m-b-10">
                                    <select class="custom-select border-0 text-muted">
                                        <option value="0" selected="">{{\Carbon\Carbon::now()->year}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="chart1 m-t-40" style="position: relative; height:250px;"></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

@endsection


@push('script')
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('backend/'.'assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('backend/'.'assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

    <script>
        $(function() {
            "use strict";
            const taskCompleted = <?php echo json_encode($completed); ?>;
            new Chartist.Bar('.chart1', {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
                    [taskCompleted[1],taskCompleted[2],taskCompleted[3],taskCompleted[4],taskCompleted[5],taskCompleted[6],taskCompleted[7],taskCompleted[8],taskCompleted[9],taskCompleted[10],taskCompleted[11],taskCompleted[12]]
                ]
            }, {
                stackBars: true,
                axisY: {
                    labelInterpolationFnc: function(value) {
                        return (value / 1) + 'k';
                    },
                    scaleMinSpace: 55
                },
                axisX: {
                    showGrid: false
                },
                plugins: [
                    Chartist.plugins.tooltip()
                ],
                seriesBarDistance: 1,
                chartPadding: {
                    top: 15,
                    right: 15,
                    bottom: 5,
                    left: 0
                }
            }).on('draw', function(data) {
                if (data.type === 'bar') {
                    data.element.attr({
                        style: 'stroke-width: 25px'
                    });
                }
            });
        });
    </script>
@endpush
