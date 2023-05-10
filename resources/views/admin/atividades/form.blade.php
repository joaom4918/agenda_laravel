<input type="text" name="atividade1"  class="form-control" placeholder="Digite 1° atividade " value="{{isset($registro->atividade1) ? $registro->atividade1 : '' }}" ><br>
<label for="">Horario 1</label>
<input type="time" name="horario1" class="form-control" value="{{isset($registro->horario1)?$registro->horario1:''}}"><br>

<input type="text" name="atividade2" class="form-control" placeholder="Digite 2° atividade " value="{{isset($registro->atividade2) ? $registro->atividade2 :''}}"><br>
<label for="">Horario 2</label>
<input type="time" name="horario2" class="form-control" value="{{isset($registro->horario2)?$registro->horario2:''}}"><br>

<input type="text" name="atividade3" class="form-control" placeholder="Digite 3° atividade " value="{{isset($registro->atividade3)? $registro->atividade3:''}}"><br>
<label for="">Horario3</label>
<input type="time" name="horario3" class="form-control" value="{{isset($registro->horario3)?$registro->horario3:''}}"> <br> 
<input type="date" name="data" value="{{isset($registro->data)?$registro->data:''}}"><br> 