<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Número de Teléfono</th>
                    <th>Quien refiere</th>
                    <th>Parentesco con el cliente</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($referidos as $referido)
                    <tr>
                        <td>{{ $referido->nombre }}</td>
                        <td>{{ $referido->telefono }}</td>
                        <td>{{ $referido->refiere }}</td>
                        <td>{{ $referido->parentesco }}</td>
                        <td>{{ $referido->notas }}</td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('referidos.show', $referido->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('referidos.destroy', $referido->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn bg-dark btn-flat" onclick="return confirm ('Una vez eliminado, no podrá ser recuperado')" >
                                    <span class="glyphicon glyphicon-trash"></span>
                                    Eliminar
                                </button>

                                {{-- <button type="button" class="btn bg-dark btn-flat pruebaConfirm">
                                    Eliminarlo {{ $tareatipo->tipoTarea }}
                                </button> --}}

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
