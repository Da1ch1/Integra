@extends('layouts.app', ['activePage' => 'sensors', 'titlePage' => __('Sensores')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{route('sensors.create')}}" class="btn btn-primary  btn-round"> <i class="material-icons">add</i> Crear Sensor</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Tabla de Sensores</h4>
                            <p class="card-category"> Aqui vemos el listado de sensores</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Numser
                                    </th>
                                    <th>
                                        lugar
                                    </th>
                                    <th>
                                        Modelo
                                    </th>
                                    <th>
                                        Capacidad
                                    </th>
                                    <th>
                                        Acciones
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach ($sensors as $sensor)
                                        <tr>
                                            <td>{{$sensor->id}}</td>
                                            <td>{{$sensor->Numser}}</td>
                                            <td>{{$sensor->lugar}}</td>
                                            <td>{{$sensor->Modelo}}</td>
                                            <td>{{$sensor->Capacidad}}</td>
                                            <td>
                                                <form action="{{route('sensors.destroy', $sensor->id)}}" method="post">
                                                    <a href="{{route('sensors.edit', $sensor->id)}}" class="btn btn-warning btn-sm btn-round"><i class="material-icons">create</i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm btn-round" type="submit"><i class="material-icons">remove_circle </i>  Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
