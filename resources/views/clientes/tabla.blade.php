<div class="box box-warning no-padding">
    <div class="box-header">
        {{-- <h3 class="box-title"></h3> --}}
    </div>
    <div class="box-body no-padding">
        <div class="content box-group">
            @foreach ($clientes as $cliente)
                <div class="panel box box-dark">
                    <div class="box-header with-border">
                        <h3 class="text-orange">
                            {{ $cliente->nombre . " " . $cliente->apellido }}
                        </h3>
                    </div>
                    <div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        {{ $cliente->nota }}
                                    </div>
                                    <div>
                                        {{ $cliente->telefono1 }}
                                    </div>
                                    <div>
                                        {{ $cliente->email }}
                                    </div>
                                    <a href="">
                                        <span class="btn bg-blue btn-flat">
                                            Proyecto Interes
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
                                    <a class="btn bg-dark btn-flat" href="{{ route('clientes.show', $cliente->id) }}">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    Editar
                                </a>

                                <form style="display:inline" method="POST" action="{{ route('clientes.destroy', $cliente->id) }}">
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
            {!! $clientes->links() !!}
        </div>

    </div>
</div>


<div class="box-body table-responsive no-padding">
    <div class="box box-warning">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Número de Identificación</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Número de Teléfono</th>
                    <th>Numero de Teléfono Opcional</th>
                    <th>Estado Civil</th>
                    <th>Ocupación</th>
                    <th>Estado de la propiedad del cliente</th>
                    <th>cliente de interés</th>
                    <th>Necesidad relacionada</th>
                    <th>Otra necesidad</th>
                    <th>Tiempo de posible inversión</th>
                    <th>Quien refiere</th>
                    <th>Notas</th>
                    <th>Estado</th>
                    <th>Clasificación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->identificacion }}</td>
                        <td>{{ $cliente->fechaNacimiento }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->telefono1 }}</td>
                        <td>{{ $cliente->telefono2 }}</td>
                        <td>{{ $cliente->estadoCivil }}</td>
                        <td>{{ $cliente->ocupacion }}</td>
                        <td>{{ $cliente->estadoPropiedad }}</td>
                        <td>{{ $cliente->clienteInteres }}</td>
                        <td>{{ $cliente->necesidadPrimaria }}</td>
                        <td>{{ $cliente->otraNecesidad }}</td>
                        <td>{{ $cliente->interes }}</td>
                        <td>{{ $cliente->referido }}</td>
                        <td>{{ $cliente->nota }}</td>
                        <td>{{ $cliente->estadoCliente }}</td>
                        <td>{{ $cliente->clasificacion }}</td>
                        <td>
                            <a class="btn bg-dark btn-flat" href="{{ route('clientes.show', $cliente->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('clientes.destroy', $cliente->id) }}">
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
