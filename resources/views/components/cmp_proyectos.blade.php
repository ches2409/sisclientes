<section class="content">
    <div class="box box-warning">

        <div class="box-header with-border">
            <h3 class="box-title">Crear un nuevo Proyecto</h3>
        </div>

        @if (session('info'))
            <div class="callout callout-success">
                <h4><i class="icon fa fa-check"></i> Datos Almacenados</h4>

                <p>{{ session('info') }}</p>
                <h6 class="text-yellow">Por favor actualiza la página (f5)</h6>
            </div>

        @else

        <form method="POST" action="{{ route('proyectos.store') }}" role="form">
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
                    <input type="text" name="proyecto" class="form-control" placeholder=" ..." value="{{ old('proyecto') }}">
                    {!! $errors->first('proyecto', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>

                <div class="form-group">
                    <label for="ubicacion">
                        Ubicación
                    </label>
                    <input type="text" name="ubicacion" class="form-control" placeholder=" ..." value="{{ old('ubicacion') }}">
                </div>

                <div class="form-group">
                    <label for="tipo_proyecto">
                        Tipo de Proyecto
                    </label>
                    <input type="text" name="tipo_proyecto" class="form-control" placeholder=" ..." value="{{ old('tipo_proyecto') }}">
                    {!! $errors->first('tipo_proyecto', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label for="descripcion">
                        Descripción
                    </label>
                    <textarea name="descripcion" class="form-control" rows="3" placeholder=" ..." >{{ old('descripcion') }}</textarea>
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-dark btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                {{-- <button type="reset" class="btn bg-dark btn-flat">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </button> --}}

                <a class="btn bg-dark btn-flat" href="{{ route('proyectos.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
        @endif
    </div>
</section>
