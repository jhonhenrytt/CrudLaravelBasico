
@extends('layouts.app')

@section('content')
<div class="container">
    
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
      <ul>
	@foreach($errors->all() as $error)
	    <li>{{$error}}</li>
        @endforeach
      </ul>
</div>
@endif


<form action="{{url('/personas')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
{{csrf_field()}}

@include('personas.form',['Modo'=>'crear'])




</form>
</div>
@endsection
