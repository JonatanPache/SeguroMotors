@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')

<div class="container">

    <form class="well form-horizontal" action="{{route('pagos.store')}}" method="POST"
        id="contact_form">
        @csrf
        @method('POST')
        <fieldset>

            <!-- Form Name -->
            <legend>Nueva Pago.</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Nombre</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="name" placeholder="Asistencia A" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Tasa de Interes</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="it" placeholder="15%" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Descripcion-->

            <div class="form-group">
                <label class="col-md-4 control-label">Description</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                          <textarea class="form-control" name="descripcion" placeholder="Asistencia Description"></textarea>
                </div>
                </div>
              </div>


            <!-- Select Basic -->

            <div class="form-group">
                <label for="direccion" class="col-md-4 control-label">Tiempo</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select id="id_tiempo" name="id_tiempo" class="form-control selectpicker">
                            @foreach ($tiempos as $tiempo)
                                <option value="{{ $tiempo->id }}">{{ $tiempo->name }}
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>

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

@endsection
