<section class="content">

{{-- SECTION Cajas de resumen
+======================================+
|SECCIÓN DE CAJAS DE RESUMENNECESIDADES|
|             "SMALL-BOX"              |
+======================================+
--}}
    @yield('cajasResumen')

{{-- SECTION Detalles -resumen --}}

    <div class="row">
{{-- SECTION Linea de tiempo
+==========================+
|SECCIÓN DE LINEA DE TIEMPO|
|        "TIMELINE"        |
+==========================+
--}}
    @yield('lineaTiempo')

{{-- SECTION Proyectos
+========================+
|RESUMEN DE LOS PROYECTOS|
|    "SOCIAL WIDGETS"    |
+========================+
--}}
    @yield('resumenProyectos')

{{-- SECTION Necesidades Primarias
+================================+
|RESUMEN DE NECESIDADES PRIMARIAS|
|    "BOX-HEADER WITH-BORDER"    |
+================================+
--}}
    @yield('resumenNecesidadesP')

    </div>

</section>
