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
                                <h1>{{ $chart2->options['chart_title'] }}</h1>
                                {!! $chart2->renderHtml() !!}
                                <hr/>

                                <div>
                                <h1>{{ $chart1->options['chart_title'] }}</h1>
                                {!! $chart1->renderHtml() !!}
                                </div>
                                <hr/>
                                <div >
                                    <h1>{{ $chart3->options['chart_title'] }}</h1>
                                    {!! $chart3->renderHtml() !!}
                                </div>
                            </div>
                            <!--   <canvas id="myChart" width="400" height="400"></canvas> -->

                        </div>






                        <!--  <div>
                           <canvas id="chart-integra" style="display: block; width: 100%; height: 600px"></canvas>

                        </div> -->

            </div>
        </div>

    </div>

@endsection





@push('js')

    {!! $chart1->renderChartJsLibrary() !!}
    {!! $chart1->renderJs() !!}
    {!! $chart2->renderJs() !!}
    {!! $chart3->renderJs() !!}
@endpush
