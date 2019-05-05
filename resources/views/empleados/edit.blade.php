@extends('layout')

@section('title')
    Empleados
@endsection

{{-- SECTION  Secciones internas
+==========================================================+
|                      SECCIÓN DONDE                       |
|SE INLUYE EL CONTENIDO AUXILIAR PARA EL USO DE LAS PÁGINAS|
|                   "SECCIONES INTERNAS"                   |
+==========================================================+
--}}

    @section('itemSide')
        @include('/components/items_side')
    @endsection

    @section('content')
        <section class="content">
            <div class="box box-warning">

                <div class="box-header with-border">
                    <h3 class="box-title">Editar</h3>
                </div>

                @if (session('info'))
                    <div class="callout callout-success">
                        <h4><i class="icon fa fa-check"></i> Datos Almacenados</h4>

                        <p>{{ session('info') }}</p>
                        <h6 class="text-yellow">Por favor actualiza la página (f5)</h6>
                    </div>

                @else

                <form class="form-horizontal" method="POST" action="{{ route ('empleados.update', $empleado->id) }}" role="form">
                    @method('PUT')
                    @csrf
                    <div class="box-body">
                        {{-- <div class="form-group">
                            <label>Identificador</label>
                            <input type="text" name="" class="form-control" disabled>
                        </div> --}}

                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">
                                Nombre del Empleado
                            </label>

                            <div class="col-sm-9">
                                <input type="text" name="nombre" class="form-control" placeholder=" ..." value="{{ $empleado->nombre }}">
                                {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="identificacion" class="col-sm-2 control-label">
                                Número de Identificación
                            </label>
                            <div class="col-sm-9">
                                <input type="text" name="identificacion" class="form-control" placeholder=" ..." value="{{ $empleado->identificacion }}">
                                {!! $errors->first('identificacion', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fechaNacimiento" class="col-sm-2 control-label">
                                Fecha de Nacimiento
                            </label>
                            <div class="col-sm-9">
                                <input type="date" name="fechaNacimiento" class="form-control" placeholder=" ..." value="{{ $empleado->fechaNacimiento }}">
                                {!! $errors->first('fechaNacimiento', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">
                                Correo Electronico
                            </label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" placeholder=" ..." value="{{ $empleado->email }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="direccion" class="col-sm-2 control-label">
                                Dirección de Residencia
                            </label>
                            <div class="col-sm-9">
                                <input type="text" name="direccion" class="form-control" placeholder=" ..." value="{{ $empleado->direccion }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefono" class="col-sm-2 control-label">
                                Número Telefónico
                            </label>
                            <div class="col-sm-9">
                                <input type="tel" name="telefono" class="form-control" placeholder=" ..." value="{{ $empleado->telefono }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cargo_id" class="col-sm-2 control-label">
                                Cargo
                            </label>
                            <div class="col-sm-9">
                                <input type="text" name="cargo_id" class="form-control" placeholder=" ..." value="{{ $empleado->cargo_id }}">
                                {!! $errors->first('cargo_id', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
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

    @endsection


{{-- SECTION  Sección de Modulos
+==========================================================+
|                      SECCIÓN DONDE                       |
|SE INCLUYEN LAS VISTAS O MODULOS QUE COMPONEN EL PRINCIPAL|
|                    SECCIÓN DE MODULOS                    |
+==========================================================+
--}}

    @section('mainHeader')
        @include('/modulos/mainHeader')
    @endsection

    @section('mainSidebar')
        @include('/modulos/mainSidebar')
    @endsection

    {{-- NOTE gestion del contenido
    +=================================+
    |CONTENEDOR INTERNO PARA EL USO DE|
    |      INGRESO DE CONTENIDO       |
    +=================================+
    --}}

        @section('contentWrapper')

            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <span class="text-maroon">{{ $empleado-> nombre }}</span>
                        <small>Editar los datos de este Empleado</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> SISGestión</a></li>
                        <li>Empleados</li>
                        <li class="active">Editar</li>
                    </ol>
                </section>

                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
            </div>

        @endsection

    @section('mainFooter')
        @include('/modulos/mainFooter')
    @endsection


{{-- @section('side')
    @include('/components/sidebar')
@endsection --}}
