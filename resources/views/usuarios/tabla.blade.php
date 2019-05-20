<div class="box box-warning no-padding">
        <div class="box-header">
            {{-- <h3 class="box-title"></h3> --}}
        </div>
        <div class="box-body">
            <table class="table dt-responsive table-hover table-bordered tablas">
                <thead>
                    <tr>
                        <th>Nombre de Empleado</th>
                        <th>Número de Identificación</th>
                        <th>Fecha de Nacimiento</th>
                        <th>e-mail</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Cargo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->identificacion }}</td>
                            <td>{{ $empleado->fechaNacimiento }}</td>
                            <td>{{ $empleado->email }}</td>
                            <td>{{ $empleado->direccion }}</td>
                            <td>{{ $empleado->telefono }}</td>
                            <td>{{ $empleado->cargo->nombre }}</td>
                            <td>
                                <a class="btn bg-dark btn-flat" href="{{ route('empleados.show', $empleado->id) }}">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    Editar
                                </a>

                                <form style="display:inline" method="POST" action="{{ route ('empleados.destroy', $empleado->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-dark btn-flat" onclick=""">
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

            {{-- {!! $empleados->links() !!} --}}
        </div>
        {{-- </div> --}}
</div>
 b
