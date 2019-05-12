<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Estado del cliente</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoclientes as $tipocliente)
                    <tr>
                        <td>{{ $tipocliente->nombre }}</td>
                        <td>{{ $tipocliente->descripcion }}</td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('tipoclientes.show', $tipocliente->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('tipoclientes.destroy', $tipocliente->id) }}">
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
