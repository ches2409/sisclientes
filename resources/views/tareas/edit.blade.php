@extends('layout')

@section('title')
    Parámetros
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

                <form method="POST" action="{{ route ('proyectos.update', $proyecto->id) }}" role="form">
                    @method('PUT')
                    @csrf
                    <div class="box-body">
                        {{-- <div class="form-group">
                            <label>Identificador</label>
                            <input type="text" name="" class="form-control" disabled>
                        </div> --}}

                        <div class="form-group">
                            <label for="proyecto">
                                Nombre del Proyecto
                            </label>
                            <input type="text" name="proyecto" class="form-control" placeholder=" ..." value="{{ $proyecto->proyecto }}">
                            {!! $errors->first('proyecto', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <label for="ubicacion">
                                Ubicación
                            </label>
                            <input type="text" name="ubicacion" class="form-control" placeholder=" ..." value="{{ $proyecto->ubicacion }}">
                        </div>

                        <div class="form-group">
                            <label for="tipoProyecto_id">
                                Tipo de Proyecto
                            </label>
                            <input type="text" name="tipoProyecto_id" class="form-control" placeholder=" ..." value="{{ $proyecto->tipoProyecto_id }}">
                            {!! $errors->first('tipoProyecto_id', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label for="descripcion">
                                Descripción
                            </label>
                            <textarea name="descripcion" class="form-control" rows="3" placeholder=" ..." >{{ $proyecto->descripcion }}</textarea>
                        </div>

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn bg-dark btn-flat">
                            <span class="glyphicon glyphicon-ok"></span>
                            Guardar
                        </button>

                        <a class="btn bg-dark btn-flat" href="{{ route('proyectos.index') }}">
                            <span class="glyphicon glyphicon-remove"></span>
                            Salir
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
                        <span class="text-maroon">{{ $proyecto-> proyecto }}</span>
                        <small>Editar los datos de este tipo de proyecto</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> SISGestión</a></li>
                        <li>Parámetros</li>
                        <li class="active">Tipos de Proyectos</li>
                        <li>Editar</li>
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
