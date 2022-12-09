@extends('adminlte::page')
@section('title', 'Dashboard')



@section('content')
<div class="container">

    <form class="well form-horizontal" action="{{route('seguros.store')}}" method="POST"
        id="contact_form">
        @csrf
        @method('POST')
        <fieldset>

            <!-- Form Name -->
            <legend>Nuevo Seguro.</legend>

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
                        <input id="descripcion" name="descripcion" placeholder="Describa el seguro." class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Costo</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="costo" name="costo" placeholder="0000" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label for="direccion" class="col-md-4 control-label">Plan</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select id="id_plan" name="id_plan" class="form-control selectpicker">
                            @foreach ($planes as $plan)
                                <option value="{{ $plan->id }}">{{ $plan->name }}
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
