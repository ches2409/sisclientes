<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Tiempo de inversión</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tiempoinversiones as $tiempoinversion)
                    <tr>
                        <td>{{ $tiempoinversion->nombre }}</td>
                        <td>{{ $tiempoinversion->descripcion }}</td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('tiempoinversiones.show', $tiempoinversion->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('tiempoinversiones.destroy', $tiempoinversion->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-dark btn-flat" onclick="return confirm ('Una vez eliminado, no podrá ser recuperado')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
