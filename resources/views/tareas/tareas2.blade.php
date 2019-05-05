{!! Form::open(['route'=>'tareas.store', 'role'=>'form']) !!}
    <div class="box-body">
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre de la Actividad') !!}
            {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>' ...', 'id'=>'tiempo']) !!}
            {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('tipoTarea_id', 'Tipo de tarea a la que pertenece') !!}
            {!! Form::select('tipoTarea_id', ['Member'=>'Miembro', 'admin'=>'Administrador'],null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
{!! Form::close()!!}

