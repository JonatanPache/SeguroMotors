@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content')

    <div class="container">

        <form class="well form-horizontal" action="{{route('cliente.store')}}" method="POST"
            id="contact_form">
            @csrf
            @method('POST')
            <fieldset>

                <!-- Form Name -->
                <legend>Nuevo Cliente.</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Nombre</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="nombre" placeholder="Alex" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Apellido Paterno</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="apellido_pa" name="apellido_pa" placeholder="Guzman" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Apellido Materno</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="apellido_ma" name="apellido_ma" placeholder="Perez" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">C.I. #</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="ci" placeholder="12729095" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="password" placeholder="" class="form-control" type="password">
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Phone #</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="telefono" placeholder="(591)72126063" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <!-- radio checks -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Genero</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="man" value="man" /> Hombre
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="woman" value="woman" /> Mujer
                            </label>
                        </div>
                    </div>
                </div>


                <!-- Select Basic -->

                <div class="form-group">
                    <label for="direccion" class="col-md-4 control-label">Ciudad</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select id="direccion" name="direccion" class="form-control selectpicker">
                                <option value="">Favor, selecciona tu ciudad.
                                <option value="Santa Cruz de la Sierra">Santa Cruz de la Sierra
                                <option value="Cochabamba">Cochabamba
                                <option>La Paz</option>
                                <option>Oruro</option>
                                <option>Potosi</option>
                                <option>Sucre</option>
                                <option>Tarija</option>
                                <option>Beni</option>
                                <option>Pando</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Fecha de Nacimiento</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="fecha_nac" placeholder="year-month-day" class="form-control" type="text">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#contact_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        first_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your first name'
                                }
                            }
                        },
                        last_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your last name'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your email address'
                                },
                                emailAddress: {
                                    message: 'Please supply a valid email address'
                                }
                            }
                        },
                        phone: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your phone number'
                                },
                                phone: {
                                    country: 'US',
                                    message: 'Please supply a vaild phone number with area code'
                                }
                            }
                        },
                        address: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please supply your street address'
                                }
                            }
                        },
                        city: {
                            validators: {
                                stringLength: {
                                    min: 4,
                                },
                                notEmpty: {
                                    message: 'Please supply your city'
                                }
                            }
                        },
                        state: {
                            validators: {
                                notEmpty: {
                                    message: 'Please select your state'
                                }
                            }
                        },
                        zip: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your zip code'
                                },
                                zipCode: {
                                    country: 'US',
                                    message: 'Please supply a vaild zip code'
                                }
                            }
                        },
                        comment: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 200,
                                    message: 'Please enter at least 10 characters and no more than 200'
                                },
                                notEmpty: {
                                    message: 'Please supply a description of your project'
                                }
                            }
                        }
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...
                    $('#contact_form').data('bootstrapValidator').resetForm();

                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function(result) {
                        console.log(result);
                    }, 'json');
                });
        });
    </script>
@stop
