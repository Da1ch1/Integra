<?php

namespace App\Http\Controllers;

use App\Models\Sensor;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;





class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensors = Sensor::all();
        return view('sensors.index', compact('sensors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('sensors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Numser' => 'required',
            'lugar' => 'required',
            'Modelo' => 'required',
            'Capacidad' => 'required',
        ]);
        Sensor::create($request->all());
        return  redirect()->route('sensors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sensor $sensor)
    {
        return view('sensors.edit', compact('sensor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensor $sensor)
    {
        $request->validate([
            'Numser' => 'required',
            'lugar' => 'required',
            'Modelo' => 'required',
            'Capacidad' => 'required',
        ]);
        $sensor->update($request->all());
        return  redirect()->route('sensors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sensor $sensor)
    {
        $sensor->delete();
        return redirect()->route('sensors.index');
    }


    public function chart()
    {
        $chart_options = [
            'chart_title' => 'Modelos',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Sensor',

            'group_by_field' => 'Modelo',
            'filter_field' => 'Numser',
            'name' => 'lugar',
            'chart_type' => 'pie',
            'chart_color' => '76,45,130',
        ];
        $chart1 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Lugares',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Sensor',

            'group_by_field' => 'lugar',
            'filter_field' => 'Numser',
            'name' => 'lugar',
            'chart_type' => 'bar',
            'chart_color' => '76,45,130',
        ];
        $chart2 = new LaravelChart($chart_options);
        $chart_options = [
            'chart_title' => 'Numero de Sensor',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Sensor',

            'group_by_field' => 'Modelo',
            'filter_field' => 'Numser',
            'name' => 'lugar',
            'chart_type' => 'line',
            'chart_color' => '76,45,130',
        ];
        $chart3 = new LaravelChart($chart_options);


        return view('sensors.Grafica',compact('chart1','chart2','chart3'));

    }


}
