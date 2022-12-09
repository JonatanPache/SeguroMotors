@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')

<div class="container">

    <form class="well form-horizontal" action="{{route('asistencias.store')}}" method="POST"
        id="contact_form">
        @csrf
        @method('POST')
        <fieldset>

            <!-- Form Name -->
            <legend>Nueva Asistencia.</legend>

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
