<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Propiedad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($propventas as $propventa)
                    <tr>
                        <td>
                            @if ($propventa->nombre=='Casa')
                                <span class="btn bg-maroon btn-flat" style="width: 150px;">
                                    {{ $propventa->nombre }}
                                </span>
                            @elseif($propventa->nombre=='Carro')
                                {{-- <span class="label label-info"> --}}
                                <span class="btn bg-purple btn-flat" style="width: 150px;">
                                    {{ $propventa->nombre }}
                                </span>
                            @elseif($propventa->nombre=='Lote Urbano')
                                {{-- <span class="label label-warning"> --}}
                                <span class="btn bg-orange btn-flat" style="width: 150px;">
                                    {{ $propventa->nombre }}
                                </span>
                            @elseif($propventa->nombre=='Lote Campestre')
                                {{-- <span class="label label-succes"> --}}
                                <span class="btn bg-green btn-flat" style="width: 150px;">
                                    {{ $propventa->nombre }}
                                </span>
                            @elseif($propventa->nombre=='Finca')
                                <span class="btn bg-teal btn-flat" style="width: 150px;">
                                    {{ $propventa->nombre }}
                                </span>
                            @elseif($propventa->nombre=='Apartamento')
                                <span class="btn bg-navy btn-flat" style="width: 150px;">
                                    {{ $propventa->nombre }}
                                </span>
                            @else
                                <span class="btn bg-light-blue btn-flat" style="width: 150px;">
                                    {{ $propventa->nombre }}
                                </span>
                            @endif
                        </td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('propventas.show', $propventa->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('propventas.destroy', $propventa->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn bg-dark btn-flat" onclick="return confirm ('Una vez eliminado, no podrá ser recuperado')" >
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
