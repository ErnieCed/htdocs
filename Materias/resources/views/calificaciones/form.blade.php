<label for="Asignatura"> Asignatura</label>
<input type="text" name="Asignatura" value="{{ isset($calificaciones->Asignatura)?$calificaciones->Asignatura:'' }}" id="Asignatura">
<br>

<label for="Actividad1"> Actividad 1</label>
<input type="text" name="Actividad1" value="{{isset( $calificaciones->Actividad1)?$calificaciones->Actividad1:'' }}" id="Actividad1">
<br>
<label for="Calificacion_Act1"> Calificación Actividad 1</label>
<input type="text" name="Calificacion_Act1" value="{{ isset($calificaciones->Calificacion_Act1)?$calificaciones->Calificacion_Act1:'' }}" id="Calificacion_Act1">
<br>
<label for="Actividad2"> Actividad 2</label>
<input type="text" name="Actividad2" value="{{isset( $calificaciones->Actividad2)?$calificaciones->Actividad2:'' }}" id="Actividad2">
<br>
<label for="Calificacion_Act2"> Calificación Actividad 2</label>
<input type="text" name="Calificacion_Act2" value="{{ isset($calificaciones->Calificacion_Act2)?$calificaciones->Calificacion_Act2:'' }}" id="Calificacion_Act2">
<br>
<input type="submit" value="Guardar Datos">
<br>
