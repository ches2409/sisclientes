<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title') | SISGestion</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="/plugins/iCheck/all.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="/bower_components/select2/dist/css/select2.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

        <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/dist/css/AdminLTE.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="/dist/css/skins/_all-skins.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="/bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="/plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="/bower_components/bootstrap-daterangepicker/daterangepicker.css">

        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <!-- bootstrap sweeralert -->
        <link rel="stylesheet" href="/bower_components/bootstrap-sweetalert/dist/sweetalert.css">

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
    </head>
    <body class="hold-transition fixed skin-yellow sidebar-mini">
        <div class="wrapper">
        {{-- SECTION MAIN HEADER
        +============================+
        |ZONA DE ENCABEZADO PRINCIPAL|
        |       "MAIN-HEADER"        |
        +============================+
        --}}
            @yield('mainHeader')
        {{-- SECTION MAIN SIDEBAR
        +======================================+
        |ZONA DE LA BARRA DE NAVEGACION LATERAL|
        |            "MAIN-SIDEBAR"            |
        +======================================+
        --}}
            <!-- Left side column. contains the logo and sidebar -->
            @yield('mainSidebar')
        {{-- SECTION CONTENT WRAPPER
        +==========================================+
        |ZONA DEL CONTENEDOR DE CONTENIDO PRINCIPAL|
        |            "CONTENT-WRAPPER"             |
        +==========================================+
        --}}
            <!-- Content Wrapper. Contains page content -->
            @yield('contentWrapper')
        {{-- SECTION footer
        +=====================+
        |ZONA DE PIE DE PÁGINA|
        |      "FOOTER"       |
        +=====================+
        --}}
            <!-- /.content-wrapper -->
            @yield('mainFooter')
            <!-- Control Sidebar -->
            @yield('side')
        </div>
    <!-- ./wrapper -->
    {{-- SECTION JAVASCRIPT
    +=======================+
    |PLUGGINS DE LA LIBRERIA|
    |     "JAVASCRIPT"      |
    +=======================+
    --}}
        <script src="/bower/moment.js"></script>
        <!-- jQuery 3 -->
        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- DataTables -->
        <script src="/bower_components/datatables.net/js/jquery.dataTables.js"></script>
        <script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.js"></script>
        <script src="/bower_components/datatables.net-bs/js/responsive.bootstrap.js"></script>
        <script src="/bower_components/datatables.net-bs/js/dataTables.responsive.js"></script>

        <!-- Select2 -->
        <script src="/bower_components/select2/dist/js/select2.full.min.js"></script>
        <!-- InputMask -->
        <script src="/plugins/input-mask/jquery.inputmask.js"></script>
        <script src="/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="/plugins/input-mask/jquery.inputmask.extensions.js"></script>

        <!-- Morris.js charts -->
        <script src="/bower_components/raphael/raphael.min.js"></script>
        <script src="/bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

        <!-- daterangepicker -->
        <script src="/bower_components/moment/min/moment.min.js"></script>
        <script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- bootstrap time picker -->
        <script src="/plugins/timepicker/bootstrap-timepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

        <!-- iCheck 1.0.1 -->
        <script src="/plugins/iCheck/icheck.min.js"></script>

        <!-- FastClick -->
        <script src="/bower_components/fastclick/lib/fastclick.js"></script>

        <script src="/bower_components/bootstrap-sweetalert/dist/sweetalert.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- AdminLTE App -->
        <script src="/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/dist/js/demo.js"></script>
        <script>
            $(function () {
                $('.tabla1').DataTable()
                $('.tablas').DataTable({
                    'paging'      : true,
                    'lengthChange': true,
                    'searching'   : false,
                    'ordering'    : true,
                    'info'        : true,
                    'autoWidth'   : false,
                    "language": {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
                })
                //Initialize Select2 Elements
                $('.select2').select2()

                //Datemask dd/mm/yyyy
                $('.datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

                //Datemask2 mm/dd/yyyy
                $('.datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
                //Datemask3 dd/mm/yyyy
                $('.datemask3').inputmask('yyyy/mm/dd', { 'placeholder': 'yyyy/mm/dd' })
                //Money Euro
                $('[data-mask]').inputmask()

                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
                )

                //Date picker
                $('.datepicker').datepicker({
                'autoclose': true,
                // currentText:"Now",
                // closeText: "Close",
                // changeMonth: true,
                // changeYear: true,
                // formatDate( "DD, MM d, yy", new Date( 2007, 7 - 1, 14 ),
                // allFormat:"yy-mm-dd",
                // appendText:"(yyyy-mm-dd)",
                /* dateFormat:"yy-mm-dd",
                dayNames:["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
                daysMin:["Do", "Lun", "Ma", "Mi", "Ju", "Vi", "Sa"],
                monthNames:["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthNamesShort:["Ene", "Feb", "Mar", "Abr", "May", "jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"] */
                })

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
                })
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass   : 'iradio_minimal-red'
                })
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
                })

                //Colorpicker
                $('.my-colorpicker1').colorpicker()
                //color picker with addon
                $('.my-colorpicker2').colorpicker()

                //Timepicker
                $('.timepicker').timepicker({
                    showMeridian: false,
                    showSeconds:true,
                    showInputs: false,
                    minuteStep: 5,
                    secondStep:30
                })
                $('.pruebaConfirm').click(function (){
                    /* swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function(){
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    }); */
                    swal({
                        title: "Vas a eliminar un elemento",
                        text: "Una vez eliminado, no podrá ser recuperado",
                        icon:"warning",
                        buttons:true,
                        dangerMode:true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("El archivo ha sido eliminado!", {
                            icon: "success",
                            });
                        } else {
                            swal("Operación cancelada!");
                        }
                    });

                });
            })
        </script>

    </body>
</html>
