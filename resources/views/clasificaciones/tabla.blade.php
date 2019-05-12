<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nombre de la clasificación</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clasificaciones as $clasificacion)
                    <tr>
                        <td>
                            @if ($clasificacion->nombre=='AAA')
                                <span class="label label-success">
                                    {{ $clasificacion->nombre }}
                                </span>
                            @elseif($clasificacion->nombre=='B+')
                                {{-- <span class="label label-info"> --}}
                                <span class="label label-primary">
                                    {{ $clasificacion->nombre }}
                                </span>
                            @elseif($clasificacion->nombre=='B')
                                {{-- <span class="label label-warning"> --}}
                                <span class="label label-warning">
                                    {{ $clasificacion->nombre }}
                                </span>
                            @elseif($clasificacion->nombre=='C')
                                {{-- <span class="label label-succes"> --}}
                                <span class="label label-danger">
                                    {{ $clasificacion->nombre }}
                                </span>
                            @else
                                <span class="label label-info">
                                    {{ $clasificacion->nombre }}
                                </span>
                            @endif
                        </td>
                        <td>{{ $clasificacion->descripcion }}</td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('clasificaciones.show', $clasificacion->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('clasificaciones.destroy', $clasificacion->id) }}">
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
