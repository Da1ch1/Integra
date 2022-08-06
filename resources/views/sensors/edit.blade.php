@extends('layouts.app', ['activePage' => 'sensors', 'titlePage' => __('Editar Sensor')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('sensors.update', $sensor) }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Editar Sensor') }}</h4>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Numser') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('Numser') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('Numser') ? ' is-invalid' : '' }}" name="Numser" id="input-Numser" type="text" placeholder="{{ __('Numser') }}" value="{{ old('Numser', $sensor->Numser)}}" required="true" aria-required="true"/>
                                            @if ($errors->has('Numser'))
                                                <span id="Numser-error" class="error text-danger" for="input-Numser">{{ $errors->first('Numser') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('lugar') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('lugar') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('lugar') ? ' is-invalid' : '' }}" name="lugar" id="input-lugar" type="text" placeholder="{{ __('lugar') }}" value="{{ old('lugar', $sensor->lugar) }}" required />
                                            @if ($errors->has('lugar'))
                                                <span id="lugar-error" class="error text-danger" for="input-lugar">{{ $errors->first('lugar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Modelo') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('Modelo') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('Modelo') ? ' is-invalid' : '' }}" name="Modelo" id="input-Modelo" type="text" placeholder="{{ __('Modelo') }}" value="{{ old('Modelo', $sensor->Modelo) }}" required />
                                            @if ($errors->has('Modelo'))
                                                <span id="Modelo-error" class="error text-danger" for="input-Modelo">{{ $errors->first('Modelo') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Capacidad') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('Capacidad') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('Capacidad') ? ' is-invalid' : '' }}" name="Capacidad" id="input-Capacidad" type="text" placeholder="{{ __('Capacidad') }}" value="{{ old('Capacidad',$sensor->Capacidad) }}" required />
                                            @if ($errors->has('Capacidad'))
                                                <span id="Capacidad-error" class="error text-danger" for="input-Capacidad">{{ $errors->first('Capacidad') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
