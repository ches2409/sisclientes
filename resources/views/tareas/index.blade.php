@extends('layout')

@section('title')
    tareas
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

            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <h1>
                            <i class="fa fa-calendar"></i>
                            Actividades
                        </h1>
                    </div>
                    <div class="col-lg-3">
                        {{-- <div class="container"> --}}
                            <div><br></div>
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div><br></div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>


            {{-- <div class="box-header">
                <h1>
                    <i class="fa fa-briefcase"></i>
                    tareas
                </h1>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-header">
                        <h3 class="box-title">Crear, editar o eliminar los tareas</h3>
                        <div class="box-tools">
                            <a class="btn bg-dark btn-flat" href="{{ route('tareas.create') }}">
                                <span class="glyphicon glyphicon-file"></span>
                                Nuevo
                            </a>
                            <a class="btn bg-dark btn-flat" href="/">
                                <span class="glyphicon glyphicon-remove"></span>
                                Salir
                            </a>
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <div class="box box-warning">
                            <div class="content box-group">
                                @foreach ($tareas as $tarea)
                                    <div class="panel box box-dark">
                                        <div class="box-header with-border">
                                            <h3 class="text-orange">
                                                {{ $tarea->tarea }}
                                            </h3>
                                        </div>
                                        <div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            descripción: {{ $tarea->descripcion }}
                                                        </div>
                                                        <a href="{{ route('tareas.show', $tarea->tipo_tarea)}}">
                                                            <span class="btn bg-blue btn-flat">
                                                                {{ $tarea->tipo_tarea }}
                                                            </span>
                                                        </a>
                                                        <a href="">
                                                            <span class="btn bg-green btn-flat">
                                                                efectivos
                                                            </span>
                                                        </a>
                                                        <a href="">
                                                            <span class="btn bg-aqua btn-flat">
                                                                interesados
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <a class="btn bg-dark btn-flat" href="{{ route('tareas.show', $tarea->id) }}">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                        Editar
                                                    </a>

                                                    <form style="display:inline" method="POST" action="{{ route('tareas.destroy', $tarea->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn bg-dark btn-flat">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                            Eliminar
                                                        </button>
                                                    </form>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- <a class="btn bg-dark btn-flat" href="{{ route('tareas.create') }}">
                        <span class="glyphicon glyphicon-file"></span>
                        Nuevo
                    </a>
                    <a class="btn bg-dark btn-flat" href="/">
                        <span class="glyphicon glyphicon-remove"></span>
                        Salir
                    </a> --}}
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
                        Actividades
                        <small>Administrar las Actividades de la empresa</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> SISGestión</a></li>
                        <li class="active">Actividades</li>
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











