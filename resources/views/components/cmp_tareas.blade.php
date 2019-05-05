<section class="content">
    <div class="box box-warning">

        <div class="box-header with-border">
            <h3 class="box-title">Asignar una actvididad</h3>
        </div>

        @if (session('info'))
            <div class="callout callout-success">
                <h4><i class="icon fa fa-check"></i> Datos Almacenados</h4>

                <p>{{ session('info') }}</p>
                <h6 class="text-yellow">Por favor actualiza la página (f5)</h6>
            </div>

        @else

        <form method="POST" action="{{ route('tareas.store') }}" role="form">
            @csrf
            <div class="box-body">

                <div class="form-group">
                    {{-- <label for="nombre">
                        Nombre de la actvididad
                    </label> --}}

                    {!! Form::label('nombre', 'Nombre de la Actividad') !!}

                    <input type="text" name="nombre" class="form-control" placeholder=" ..." value="{{ old('nombre') }}">
                    {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>

                <div class="form-group">
                    <label for="tipoTarea_id">
                        Tipo de tarea a la que pertenece
                    </label>

                    <input type="numeric" name="tipoTarea_id" class="form-control" placeholder=" ..." value="{{ old('tipoTarea_id') }}">
                    {!! $errors->first('tipoTarea_id', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="fecha">
                            Fecha a realizar
                        </label>

                        <div class="input-group date">
                            <input type="text" name="fecha" class="form-control datepicker datemask3" value="{{ old('fecha') }}">
                            {!! $errors->first('fecha', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}

                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>

                        </div>
                    </div>

                    <div class="bootstrap-timepicker col-md-6">
                        <div class="form-group">
                            <label for="hora">
                                Hora
                            </label>
                            <div class="input-group">
                                <input type="text" name="hora" class="form-control timepicker" value="{{ old('hora') }}">
                                {!! $errors->first('hora', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}

                                <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="descripcion">
                        Descripcion de la actividad
                    </label>

                    <input type="text" name="descripcion" class="form-control" placeholder=" ..." value="{{ old('descripcion') }}">
                    {!! $errors->first('descripcion', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="cliente_id">
                            Cliente al que corresponde
                        </label>

                        <input type="text" name="cliente_id" class="form-control" placeholder=" ..." value="{{ old('cliente_id') }}">
                        {!! $errors->first('cliente_id', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                    </div>

                    <div class="form-group col-md-6">
                        <label for="responsable_id">
                            Responsable de ejecutar
                        </label>

                        <input type="text" name="responsable_id" class="form-control" placeholder=" ..." value="{{ old('responsable_id') }}">
                        {!! $errors->first('responsable_id', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                    </div>
                </div>


                <div class="form-group">
                    <label for="estado">
                        Estado
                    </label>

                    <input type="text" name="estado" class="form-control" placeholder=" ..." value="{{ old('estado') }}">
                    {!! $errors->first('estado', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>



                {{-- <div class="form-group">
                    <label for="area">
                        Área a la que corresponde este tipo de tarea
                    </label>

                    <input type="text" name="area" class="form-control" placeholder=" Comercial / Administrativa " value="{{ old('area') }}">

                </div> --}}


            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-dark btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                <a class="btn bg-dark btn-flat" href="{{ route('tareas.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>

        @endif
    </div>
</section>
