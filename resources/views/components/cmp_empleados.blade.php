<section class="content">
    <div class="box box-warning">

        <div class="box-header with-border">
            <h3 class="box-title">Crear un nuevo Empleado</h3>
        </div>

        @if (session('info'))
            <div class="callout callout-success">
                <h4><i class="icon fa fa-check"></i> Datos Almacenados</h4>

                <p>{{ session('info') }}</p>
                <h6 class="text-yellow">Por favor actualiza la página (f5)</h6>
            </div>

        @else

        <form class="form-horizontal" method="POST" action="{{ route('empleados.store') }}" role="form">
            @csrf
            <div class="box-body">

                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">
                        Nombre del Empleado
                    </label>

                    <div class="col-sm-9">
                        <input type="text" name="nombre" class="form-control" placeholder=" ..." value="{{ old('nombre') }}">
                        {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                    </div>

                </div>

                <div class="form-group">
                    <label for="identificacion" class="col-sm-2 control-label">
                        Número de Identificación
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="identificacion" class="form-control" placeholder=" ..." value="{{ old('identificacion') }}">
                        {!! $errors->first('identificacion', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="fechaNacimiento" class="col-sm-2 control-label">
                        Fecha de Nacimiento
                    </label>
                    <div class="col-sm-9">
                        <input type="date" name="fechaNacimiento" class="form-control" placeholder=" ..." value="{{ old('fechaNacimiento') }}">
                        {!! $errors->first('fechaNacimiento', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">
                        Correo Electronico
                    </label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" placeholder=" ..." value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="direccion" class="col-sm-2 control-label">
                        Dirección de Residencia
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="direccion" class="form-control" placeholder=" ..." value="{{ old('direccion') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="telefono" class="col-sm-2 control-label">
                        Número Telefónico
                    </label>
                    <div class="col-sm-9">
                        <input type="tel" name="telefono" class="form-control" placeholder=" ..." value="{{ old('telefono') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="cargo" class="col-sm-2 control-label">
                        Cargo
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="cargo" class="form-control" placeholder=" ..." value="{{ old('cargo') }}">
                        {!! $errors->first('cargo', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                    </div>
                </div>


            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-dark btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                {{-- <button type="reset" class="btn bg-dark btn-flat">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </button> --}}

                <a class="btn bg-dark btn-flat" href="{{ route('empleados.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
        @endif
    </div>
</section>
