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
        @include('/components/cmp_interes')
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
                        Interés del cliente
                        <small>Administrar</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> SISGestión</a></li>
                        <li>Parámetros</li>
                        <li><a href="{{ route('tiempoinversiones.index') }}">Tiempo de inversión</a></li>
                        <li class="active">
                            <span class="text-info">Crear</span>
                        </li>
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











