@extends('layouts.staff')

@section('title','Dashboard')

@push('css')


@endpush


@section('content')
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
                                    <option value="0" selected="">2018</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="chart1 m-t-40" style="position: relative; height:250px;"></div>

                </div>
            </div>
        </div>
    </div>
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
