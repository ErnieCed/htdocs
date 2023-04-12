<div class="form-group">

<label for="Nombre">Nombre</label>
<input type="text" class="form-control " name="Nombre" value="{{ isset($producto->Nombre)?$producto->Nombre:'' }}" id="Nombre">

</div>

<div class="form.group">
<label for="Descripcion">Descripción</label>
<input type="text" class="form-control " name="Descripcion" value="{{ isset( $producto->Descripcion)?$producto->Descripcion:' ' }}" id="Descripcion">

</div>

<div class="form-group">
    
<label for="Precio ">Precio</label>
<input type="text" class="form-control " name="Precio" value="{{isset ($producto->Precio)?$producto->Precio:' ' }}" id="Precio">


</div>

<div class="form-group">
    
<label for="Stock">Stock</label>
<input type="text" class="form-control " name="Stock" value="{{ isset($producto->Stock)?$producto->Stock:' ' }}" id="Stock">

</div>


<div class="form-group">
<label for="FotoProducto">Foto del Producto</label>
@if(isset($producto->FotoProducto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->FotoProducto }}" width="100 "  alt="">
@endif
<input type="file" class="form-control " name="FotoProducto" value="" id="FotoProducto">

</div>


<input class="btn btn-success" type="submit" value="Guardar datos">

<a  class="btn btn-primary " href="{{ url('producto/') }}">Regresar</a>

<br>