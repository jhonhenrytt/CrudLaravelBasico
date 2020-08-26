
@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje')){{
	Session::get('Mensaje')
}}
@endif


<a href="{{url('personas/create')}}" class="btn btn-success">Agregar Personas</a>
<br/>
<br/>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>DNI</th>
            <th>email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$persona->Nombre}} {{$persona->ApelPaterno}} {{$persona->ApelMaterno}}</td>
            <td>{{$persona->dni}}</td>
            <td>{{$persona->email}}</td>
            <td>
                <a class="btn btn-warning" href="{{url('/personas/'.$persona->id.'/edit')}}">Editar</a>

            <form method="post" action="{{url('/personas/'.$persona->id)}}" style="display:inline">
                {{csrf_field()}}
                {{method_field('DELETE')}}

            <button class="btn btn-danger"type="submit" onclick="return confirm('¿Desea borrar el registro?');" >Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


