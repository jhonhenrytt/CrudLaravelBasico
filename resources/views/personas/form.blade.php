


<div class="container">




<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="Nombre" id="Nombre" value="{{isset($persona->Nombre)?$persona->Nombre:''}}">
</div>


<div class="form-group">
<label for="ApelPaterno" class="control-label">{{'Apellido Paterno'}}</label>
<input type="text" class="form-control" name="ApelPaterno" id="ApelPaterno" value="{{isset($persona->ApelPaterno)?$persona->ApelPaterno:''}}">
</div>

<div lass="form-group">
<label for="ApelMaterno" class="control-label">{{'Apellido Materno'}}</label>
<input type="text" class="form-control" name="ApelMaterno" id="ApelMaterno" value="{{isset($persona->ApelMaterno)?$persona->ApelMaterno:''}}">
</div>


<div class="form-group">
<label for="dni" class="control-label">{{'DNI'}}</label>
<input type="text" class="form-control" name="dni" id="dni" value="{{isset($persona->dni)?$persona->dni:''}}">
</div>

<div class="form-group">
<label for="email" class="control-label">{{'Correo'}}</label>
<input type="email" class="form-control" name="email" id="email" value="{{isset($persona->email)?$persona->email:''}}">
</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear'?'Agregar':'Modificar'}}">

<a class="btn btn-primary" href="{{url('personas')}}">Regresar</a>

</div>




