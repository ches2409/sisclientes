@extends('layout')

@section('title')
    Tablero
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

    @section('cajasResumen')
        @include('components/cajasResumen')
    @endsection

    @section('lineaTiempo')
        @include('/components/lineaTiempo')
    @endsection

    @section('resumenProyectos')
        @include('/components/resumenProyectos')
    @endsection

    @section('resumenNecesidadesP')
        @include('/components/resumenNecesidadesP')
    @endsection

    @section('content')
        @include('/contenedor')
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
            @include('/modulos/contentWrapper')
        @endsection

    @section('mainFooter')
        @include('/modulos/mainFooter')
    @endsection


{{-- @section('side')
    @include('/components/sidebar')
@endsection --}}
