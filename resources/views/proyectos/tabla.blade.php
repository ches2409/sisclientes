<div class="box box-warning no-padding">
    <div class="box-header">
        {{-- <h3 class="box-title"></h3> --}}
    </div>
    <div class="box-body no-padding">
        <div class="content box-group">
            @foreach ($proyectos as $proyecto)
                <div class="panel box box-dark">
                    <div class="box-header with-border">
                        <h3 class="text-orange">
                            {{ $proyecto->proyecto }}
                        </h3>
                    </div>
                    <div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        descripción: {{ $proyecto->descripcion }}
                                    </div>
                                    <a href="{{ route('tiposProyectos.show', $proyecto->tipoProyecto_id)}}">
                                        <span class="btn bg-blue btn-flat">
                                            {{ $proyecto->tipoProyecto_id }}
                                        </span>
                                    </a>
                                    <a href="">
                                        <span class="btn bg-green btn-flat">
                                            efectivos
                                        </span>
                                    </a>
                                    <a href="">
                                        <span class="btn bg-aqua btn-flat">
                                            interesados
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a class="btn bg-dark btn-flat" href="{{ route('proyectos.show', $proyecto->id) }}">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    Editar
                                </a>

                                <form style="display:inline" method="POST" action="{{ route('proyectos.destroy', $proyecto->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-dark btn-flat">
                                        <span class="glyphicon glyphicon-trash"></span>
                                        Eliminar
                                    </button>
                                </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="container">
            {!! $proyectos->links() !!}
        </div>

    </div>
</div>
        {{-- <div class="box-body no-padding">
            <div class="box box-warning">
                <div class="content box-group">
                    @foreach ($proyectos as $proyecto)
                        <div class="panel box box-dark">
                            <div class="box-header with-border">
                                <h3 class="text-orange">
                                    {{ $proyecto->proyecto }}
                                </h3>
                            </div>
                            <div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                descripción: {{ $proyecto->descripcion }}
                                            </div>
                                            <a href="{{ route('tiposProyectos.show', $proyecto->tipoProyecto_id)}}">
                                                <span class="btn bg-blue btn-flat">
                                                    {{ $proyecto->tipoProyecto_id }}
                                                </span>
                                            </a>
                                            <a href="">
                                                <span class="btn bg-green btn-flat">
                                                    efectivos
                                                </span>
                                            </a>
                                            <a href="">
                                                <span class="btn bg-aqua btn-flat">
                                                    interesados
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="btn bg-dark btn-flat" href="{{ route('proyectos.show', $proyecto->id) }}">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                            Editar
                                        </a>

                                        <form style="display:inline" method="POST" action="{{ route('proyectos.destroy', $proyecto->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn bg-dark btn-flat">
                                                <span class="glyphicon glyphicon-trash"></span>
                                                Eliminar
                                            </button>
                                        </form>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> --}}
