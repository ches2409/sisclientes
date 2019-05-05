<section class="content">
    <div class="box box-warning">

        <div class="box-header with-border">
            <h3 class="box-title">Crear una nueva Clasificación</h3>
        </div>

        @if (session('info'))
            <div class="callout callout-success">
                <h4><i class="icon fa fa-check"></i> Datos Almacenados</h4>

                <p>{{ session('info') }}</p>
                <h6 class="text-yellow">Por favor actualiza la página (f5)</h6>
            </div>

        @else

        <form method="POST" action="{{ route('clasificaciones.store') }}" role="form">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="nombre">
                        Nombre de la nueva Clasificación
                    </label>
                    <input type="text" name="nombre" class="form-control" placeholder=" ..." value="{{ old('nombre') }}">
                    {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
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

                <a class="btn bg-dark btn-flat" href="{{ route('clasificaciones.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
        @endif
    </div>
</section>

