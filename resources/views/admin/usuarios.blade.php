@extends('layout')

@section('title')
    Usuarios
@endsection
@section('mainHeader')
    @include('/modulos/mainHeader')
@endsection

@section('itemSide')
    @include('/components/items_side')
@endsection

@section('mainSidebar')
    @include('/modulos/mainSidebar')
@endsection

@section('contentWrapper')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Usuarios
                <small>Administrar los usuarios del sistema</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> SISGestión</a></li>
                <li class="active">Usuarios</li>
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
