<section class="content">
    <div class="box box-warning">

        <div class="box-header with-border">
            <h3 class="box-title">Crear un nuevo Referido</h3>
        </div>

        @if (session('info'))
            <div class="callout callout-success">
                <h4><i class="icon fa fa-check"></i> Datos Almacenados</h4>

                <p>{{ session('info') }}</p>
                <h6 class="text-yellow">Por favor actualiza la página (f5)</h6>
            </div>

        @else

        <form method="POST" action="{{ route('referidos.store') }}" role="form">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="nombre">
                        Nombre Completo del referido
                    </label>
                    <input type="text" name="nombre" class="form-control" placeholder=" ..." value="{{ old('nombre') }}">
                    {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>

                <div class="form-group">
                    <label for="telefono">
                        Número de Teléfono
                    </label>
                    <input type="text" name="telefono" class="form-control" placeholder=" ..." value="{{ old('telefono') }}">
                    {!! $errors->first('telefono', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>

                <div class="form-group">
                    <label for="refiere">
                        Quien refiere
                    </label>
                    <input type="text" name="refiere" class="form-control" placeholder=" ..." value="{{ old('refiere') }}">
                    {!! $errors->first('refiere', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>

                <div class="form-group">
                    <label for="parentesco">
                        Parentesco con el cliente
                    </label>
                    <input type="text" name="parentesco" class="form-control" placeholder=" ..." value="{{ old('parentesco') }}">
                    {!! $errors->first('parentesco', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label for="notas">
                        Notas
                    </label>
                    <textarea name="notas" class="form-control" rows="3" placeholder=" ..." >{{ old('notas') }}</textarea>
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-dark btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                <a class="btn bg-dark btn-flat" href="{{ route('referidos.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
        @endif
    </div>
</section>

