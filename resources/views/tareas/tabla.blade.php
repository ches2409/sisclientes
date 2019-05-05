<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <div class="content box-group">
            @foreach ($tareas as $tarea)
                <div class="panel box box-dark">
                    <div class="box-header with-border">
                        <h3 class="text-orange">
                            {{ $tarea->tarea }}
                        </h3>
                    </div>
                    <div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        descripción: {{ $tarea->descripcion }}
                                    </div>
                                    <a href="{{ route('tareas.show', $tarea->tipo_tarea)}}">
                                        <span class="btn bg-blue btn-flat">
                                            {{ $tarea->tipo_tarea }}
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
                                    <a class="btn bg-dark btn-flat" href="{{ route('tareas.show', $tarea->id) }}">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    Editar
                                </a>

                                <form style="display:inline" method="POST" action="{{ route('tareas.destroy', $tarea->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm (¿Deseas eliminar esta Actividad?)" class="btn bg-dark btn-flat">
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
</div>
