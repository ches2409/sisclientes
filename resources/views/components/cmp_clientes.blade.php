<section class="content">
    <div class="box box-warning">

        <div class="box-header with-border">
            <h3 class="box-title">Crear un nuevo Cliente</h3>
        </div>

        @if (session('info'))
            <div class="callout callout-success">
                <h4><i class="icon fa fa-check"></i> Datos Almacenados</h4>

                <p>{{ session('info') }}</p>
                <h6 class="text-yellow">Por favor actualiza la página (f5)</h6>
            </div>

        @else

        <form method="POST" action="{{ route('clientes.store') }}" role="form">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="box-header">
                        <div class="box-title">
                            <h3 class="text-green">Información Básica</h3>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label for="nombre">
                                Nombre
                            </label>
                            <input type="text" name="nombre" class="form-control" placeholder=" ..." value="{{ old('nombre') }}">
                            {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-6">
                            <label for="apellido">
                                Apellido
                            </label>
                            <input type="text" name="apellido" class="form-control" placeholder=" ..." value="{{ old('apellido') }}">
                            {!! $errors->first('apellido', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-6">
                            <label for="identificacion">
                                Número de Identificación
                            </label>
                            <input type="text" name="identificacion" class="form-control" placeholder=" ..." value="{{ old('identificacion') }}">
                            {!! $errors->first('identificacion', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-6">
                            <label for="fechaNacimiento">
                                Fecha de Nacimiento
                            </label>
                            <input type="text" name="fechaNacimiento" class="form-control datepicker datemask3" placeholder=" ..." value="{{ old('fechaNacimiento') }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">
                                Email
                            </label>
                            <input type="email" name="email" class="form-control" placeholder=" ..." value="{{ old('email') }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="direccion">
                                Dirección
                            </label>
                            <input type="text" name="direccion" class="form-control" placeholder=" ..." value="{{ old('direccion') }}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="telefono1">
                                Número de Teléfono
                            </label>
                            <input type="text" name="telefono1" class="form-control" placeholder=" ..." value="{{ old('telefono1') }}">
                            {!! $errors->first('telefono1', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-3">
                            <label for="telefono2">
                                Número de Teléfono Opcional
                            </label>
                            <input type="text" name="telefono2" class="form-control" placeholder=" ..." value="{{ old('telefono2') }}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="estadoCivil">
                                Estado Civil
                            </label>
                            <select class="form-control custom-select" name="estadoCivil">
                                <option value="" selected>Seleccione un estado...</option>
                                <option value="1">Soltero(a)</option>
                                <option value="2">Casado(a)</option>
                                <option value="3">Viudo(a)</option>
                                <option value="4">Divorsiado(a)</option>
                                <option value="5">Unión Libre</option>
                                <option value="6">No responde</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="ocupacion">
                                Ocupación
                            </label>
                            <select class="form-control custom-select" name="ocupacion">
                                <option value="" selected>Seleccione una ocupación...</option>
                                <option value="1">Empleado(a)</option>
                                <option value="2">Independiente</option>
                                <option value="3">Comerciante</option>
                                <option value="4">Empresario(a)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box-header">
                        <div class="box-title">
                            <h3 class="text-green">información Comercial</h3>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group col-md-4">
                            <label for="disponibilidad">
                                Disponibilidad de pago
                            </label>
                            <input type="text" name="disponibilidad" class="form-control" placeholder=" ..." value="{{ old('disponibilidad') }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="estadoPropiedad">
                                Estado de la propiedad
                            </label>
                            <input type="text" name="estadoPropiedad" class="form-control" placeholder=" ..." value="{{ old('estadoPropiedad') }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="proyectoInteres">
                                Proyecto de interés
                            </label>
                            <input type="text" name="proyectoInteres" class="form-control" placeholder=" ..." value="{{ old('proyectoInteres') }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="necesidadPrimaria">
                                Necesidad relacionada
                            </label>
                            <input type="text" name="necesidadPrimaria" class="form-control" placeholder=" ..." value="{{ old('necesidadPrimaria') }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="otranecesidad">
                                Otras Necesidades
                            </label>
                            <input type="text" name="otranecesidad" class="form-control" placeholder=" ..." value="{{ old('otranecesidad') }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="propventas">
                                Propiedades Negociables
                            </label>
                            <input type="text" name="propventas" class="form-control" placeholder=" ..." value="{{ old('propventas') }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="interes">
                                Tiempo de posible inversión
                            </label>
                            <input type="text" name="interes" class="form-control" placeholder=" ..." value="{{ old('interes') }}">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="referido">
                                referido
                            </label>
                            <select class="form-control custom-select" name="referido">
                                <option value="" selected></option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="box-header">
                        <div class="box-title">
                            <h3 class="text-green">información Interna</h3>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label for="clasificacion">
                                Clasificación
                            </label>
                            <input type="text" name="clasificacion" class="form-control" placeholder=" ..." value="{{ old('clasificacion') }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="referido">
                                estado del cliente
                            </label>
                            <select class="form-control custom-select" name="referido">
                                <option value="" selected>Seleccione el estado</option>
                                <option value="1">Efectivo</option>
                                <option value="2">En proceso</option>
                                <option value="2">Retirado</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="notas">
                                Notas
                            </label>
                            <textarea name="notas" class="form-control" rows="3" placeholder=" ..." >{{ old('notas') }}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-dark btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                <a class="btn bg-dark btn-flat" href="{{ route('clientes.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
        @endif
    </div>
</section>

