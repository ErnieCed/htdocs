
<div class=" form-group "> 

<label for="Nombre"> Nombre </label>
<input type="text" class="form-control " name="Nombre"  value="{{isset( $heroes->nombre)?$heroes->Nombre:' ' }}" id="Nombre">
</div>

<div class=" form-group "> 

<label for="nombre_real"> Nombre Real </label>
<input type="text" class="form-control " name="nombre_real" value="{{isset( $heroes->nombre_real)?$heroes->Nombre_real:' ' }}" id="nombre_real">
</div>

<div class=" form-group "> 

<label for="foto"> Foto </label>
@if(isset($heroes->foto))
<img class=" img-thumbnail img fluid "  src="{{ asset('storage').'/'.$heroes->foto }}" width="100 "alt="">
@endif

<input type="file" class="form-control " name="foto" value="" id="foto">
</div>

<div class=" form-group "> 

<label for="informacion_adicional"> Información Adicional </label>
<input type="text" class="form-control " name="informacion_adicional" value="{{isset( $heroes->informcion_adicional)?$heroes->informacion_adicional:' ' }}" id="informacion_adicional">
</div>


<div class=" form-group "> 
<label for="Enviar "> </label>
<input class=" btn btn-success " type="submit" value="Guardar Datos">

<a class=" btn btn-primary " href="{{ url('heroes/') }}">Regresar</a>
</div>