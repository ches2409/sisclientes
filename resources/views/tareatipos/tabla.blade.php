<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Tipo de tarea</th>
                    <th>Área a la que corresponde</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tareatipos as $tareatipo)
                    <tr>
                        <td>
                            @if ($tareatipo->tipoTarea=='Llamada de cobro')
                                <span class="btn bg-red btn-flat" style="width: 150px;">
                                    {{ $tareatipo->tipoTarea }}
                                </span>
                            @elseif($tareatipo->tipoTarea=='Llamada de contacto')
                                {{-- <span class="label label-info"> --}}
                                <span class="btn bg-teal btn-flat" style="width: 150px;">
                                    {{ $tareatipo->tipoTarea }}
                                </span>
                            @elseif($tareatipo->tipoTarea=='Reunión')
                                {{-- <span class="label label-warning"> --}}
                                <span class="btn bg-yellow btn-flat" style="width: 150px;">
                                    {{ $tareatipo->tipoTarea }}
                                </span>
                            @elseif($tareatipo->tipoTarea=='Visitar')
                                {{-- <span class="label label-succes"> --}}
                                <span class="btn bg-green btn-flat" style="width: 150px;">
                                    {{ $tareatipo->tipoTarea }}
                                </span>
                            @elseif($tareatipo->tipoTarea=='Email')
                                <span class="btn bg-blue btn-flat" style="width: 150px;">
                                    {{ $tareatipo->tipoTarea }}
                                </span>
                            @else
                                <span class="btn bg-aqua btn-flat" style="width: 150px;">
                                    {{ $tareatipo->tipoTarea }}
                                </span>
                            @endif
                        </td>
                        <td>{{ $tareatipo->area }}</td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('tareatipos.show', $tareatipo->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('tareatipos.destroy', $tareatipo->id) }}">
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
        @include('flash::message')
    </div>
</div>
