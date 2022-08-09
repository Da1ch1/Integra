<?php

namespace App\Http\Controllers;

use App\Models\Sensor;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;





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


        return view('sensors.Grafica');

    }


}
