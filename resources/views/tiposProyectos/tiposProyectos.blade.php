@extends('layout')

@section('title')
    Proyectos
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
        <div class="content">
            <h1>Tipos de Proyectos</h1>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-header">
                        <h3 class="box-title">Crear, editar o eliminar los tipos de proyectos</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="box-body table-responsive no-padding box box-warning">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Tipo de Proyecto</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tiposProyectos as $tipoProyecto)
                                    <tr>
                                        <td>{{ $tipoProyecto->tipo_proyecto }}</td>
                                        <td>{{ $tipoProyecto->descripcion }}</td>
                                        <td>
                                            <a class="btn bg-dark btn-flat" href="{{ route('tiposProyectos.show', $tipoProyecto->id) }}">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                                Editar
                                            </a>

                                            <form style="display:inline" method="POST" action="{{ route ('tiposProyectos.destroy', $tipoProyecto->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn bg-dark btn-flat">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                    Eliminar
                                                </button>
                                            </form>
                                            {{-- <a class="btn bg-dark btn-flat" href="">
                                                <span class="glyphicon glyphicon-trash"></span>
                                                Eliminar
                                            </a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <a class="btn bg-dark btn-flat" href="{{ route('tiposProyectos.create') }}">
                        <span class="glyphicon glyphicon-file"></span>
                        Nuevo
                    </a>
                    <a class="btn bg-dark btn-flat" href="/">
                        <span class="glyphicon glyphicon-remove"></span>
                        Salir
                    </a>
                </div>
            </div>
        </div>


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
                        Proyectos
                        <small>Administrar los Proyectos de la empresa</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> SISGestión</a></li>
                        <li><a href="#">Parámetros</a></li>
                        <li class="active">Proyectos</li>
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











