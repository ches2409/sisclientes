<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Disponibilidad de pago</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dispopagos as $dispopago)
                    <tr>
                        <td>{{ $dispopago->nombre }}</td>
                        <td>{{ $dispopago->descripcion }}</td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('dispopagos.show', $dispopago->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('dispopagos.destroy', $dispopago->id) }}">
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
