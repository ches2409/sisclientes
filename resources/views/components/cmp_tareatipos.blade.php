<section class="content">
    <div class="box box-warning">

        <div class="box-header with-border">
            <h3 class="box-title">Crear un nuevo tipo de tarea</h3>
        </div>

        @if (session('info'))
            <div class="callout callout-success">
                <h4><i class="icon fa fa-check"></i> Datos Almacenados</h4>

                <p>{{ session('info') }}</p>
                <h6 class="text-yellow">Por favor actualiza la página (f5)</h6>
            </div>

        @else

        <form method="POST" action="{{ route('tareatipos.store') }}" role="form">
            @csrf
            <div class="box-body">

                <div class="form-group">
                    <label for="tipoTarea">
                        Tipo de tarea
                    </label>

                    <input type="text" name="tipoTarea" class="form-control" placeholder=" ..." value="{{ old('tipoTarea') }}">
                    {!! $errors->first('tipoTarea', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}

                </div>

                <div class="form-group">
                    <label for="area">
                        Área a la que corresponde este tipo de tarea
                    </label>
                    <select class="form-control custom-select" name="area">
                        <option value="Comercial">Comercial</option>
                        <option value="Administrativa">Administrativa</option>
                        <option value="Compartida">Compartida</option>
                        <option selected></option>
                    </select>
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

                {{-- <button type="reset" class="btn bg-dark btn-flat">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </button> --}}

                <a class="btn bg-dark btn-flat" href="{{ route('tareatipos.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>

        @endif
    </div>
</section>
