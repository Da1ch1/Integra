@extends('layouts.app', ['activePage' => 'graf', 'titlePage' => __('Graficas')])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h2 class="card-category">Integra SA.</h2>
                                <h5 class="card-title">Datos Sensor</h5>
                            </div>
                            <!--   <canvas id="myChart" width="400" height="400"></canvas> -->

                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="chart-integra" style="display: block; width: 100%; height: 600px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection





@push('js')


@endpush
