<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Tipo de Proyecto</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tiposProyectos as $tipoProyecto)
                    <tr>
                        <td>{{ $tipoProyecto->tipo_proyecto }}</td>
                        <td>{{ $tipoProyecto->descripcion }}</td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('tiposProyectos.show', $tipoProyecto->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('tiposProyectos.destroy', $tipoProyecto->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-dark btn-flat" onclick="return confirm ('Una vez eliminado, no podrá ser recuperado')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    Eliminar
                                </button>
                            </form>
                            {{-- <a class="btn bg-dark btn-flat" href="">
                                <span class="glyphicon glyphicon-trash"></span>
                                Eliminar
                            </a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
