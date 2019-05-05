
@extends('layout')

@section('title')
    Interés
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
                            <i class="fa fa-hourglass-2"></i>
                            Interés del cliente
                        </h1>
                    </div>
                    <div class="col-lg-3">
                        <div><br></div>
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div><br></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-header">
                        <h3 class="box-title">Crear, editar o eliminar el tiempo de inversión</h3>
                        <div class="box-tools">
                            <a class="btn bg-dark btn-flat" href="{{ route('tiempoinversiones.create') }}">
                                <span class="glyphicon glyphicon-file"></span>
                                Nuevo
                            </a>
                            <a class="btn bg-dark btn-flat" href="/">
                                <span class="glyphicon glyphicon-remove"></span>
                                Salir
                            </a>
                        </div>
                        <div><p></p></div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <div class="box box-warning">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tiempo de inversión</th>
                                        <th>Descripción</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tiempoinversiones as $tiempoinversion)
                                        <tr>
                                            <td>{{ $tiempoinversion->nombre }}</td>
                                            <td>{{ $tiempoinversion->descripcion }}</td>
                                            <td>
                                                <a class="btn bg-dark btn-flat" href="{{ route('tiempoinversiones.show', $tiempoinversion->id) }}">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                    Editar
                                                </a>

                                                <form style="display:inline" method="POST" action="{{ route ('tiempoinversiones.destroy', $tiempoinversion->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn bg-dark btn-flat">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                        Posibles tiempos de Inversión
                        <small>Administrar</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> SISGestión</a></li>
                        <li class="active">Interés</li>
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











