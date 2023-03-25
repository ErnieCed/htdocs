<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre"  value="{{isset( $heroes->nombre)?$heroes->Nombre:' ' }}" id="Nombre">
<br>

<label for="nombre_real"> Nombre Real </label>
<input type="text" name="nombre_real" value="{{isset( $heroes->nombre_real)?$heroes->Nombre_real:' ' }}" id="nombre_real">
<br>

<label for="foto"> Foto </label>
@if(isset($heroes->foto))
<img src="{{ asset('storage').'/'.$heroes->foto }}" width="100 "alt="">
@endif

<input type="file" name="foto" value="" id="foto">
<br>

<label for="informacion_adicional"> Información Adicional </label>
<input type="text" name="informacion_adicional" value="{{isset( $heroes->informcion_adicional)?$heroes->informacion_adicional:' ' }}" id="informacion_adicional">
<br>

<label for="Enviar "> </label>
<input type="submit" value="Guardar Datos">

<a href="{{ url('heroes/') }}">Regresar</a>

<br>