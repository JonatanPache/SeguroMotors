@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo Plan</h1>
@stop

@section('css')

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

@stop

@section('content')

    <div class="container">

        <form class="well form-horizontal" action="{{ route('planes.store') }}" method="POST" id="contact_form">
            @csrf
            @method('POST')
            <fieldset>

                <!-- Form Name -->
                <legend>Nuevo Plan.</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Nombre</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name" placeholder="Alex" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Descripcion</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="descripcion" name="descripcion" placeholder="Guzman" class="form-control"
                                type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Costo</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="costo" name="costo" placeholder="Guzman" class="form-control" type="text">
                        </div>
                    </div>
                </div>




                <!-- Beneficios -->
                <div class="form-group">
                    <label for="beneficio" class="col-md-4 control-label">Beneficios</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select id="id_beneficio" name="beneficios[]" title="seleciona los beneficios"
                                class="form-control selectpicker" multiple>
                                @foreach ($beneficios as $pago)
                                    <option value="{{ $pago->id_beneficio }}">{{ $pago->name }}
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>

                <!-- Asistencias -->
                <div class="form-group">
                    <label for="asistencias" class="col-md-4 control-label">Asistencias</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select id="id_asistencia" name="asistencias[]" title="seleciona las asistencias"
                                class="form-control selectpicker" multiple>
                                @foreach ($asistencias as $pago)
                                    <option value="{{ $pago->id_asistencias}}">{{ $pago->name }}
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>


                <!-- Coberturas -->
                <div class="form-group">
                    <label for="coberturas" class="col-md-4 control-label">Coberturas</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select id="coberturas" name="coberturas[]" title="seleciona las coberturas"
                                class="form-control selectpicker" multiple>
                                @foreach ($coberturas as $pago)
                                    <option value="{{ $pago->id}}">{{ $pago->name }}
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>


                <!-- Select Basic -->

                <div class="form-group">
                    <label for="direccion" class="col-md-4 control-label">Tipo Pago **obligatorio</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select id="id_pago" name="id_pago" class="form-control selectpicker">
                                @foreach ($pagos as $pago)
                                    <option value="{{ $pago->id_pago }}">{{ $pago->name }}
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>


                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Registrado.<i
                        class="glyphicon glyphicon-thumbs-up"></i> Gracias por registrarte.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning">Registrar<span
                                class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

@stop


@section('js')
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@stop
