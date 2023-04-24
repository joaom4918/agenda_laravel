<input type="text" name="atividade1"  class="form-control" placeholder="Digite 1° atividade " value="{{isset($registro->atividade1) ? $registro->atividade1 : '' }}" ><br>
<input type="text" name="atividade2" class="form-control" placeholder="Digite 2° atividade " value="{{isset($registro->atividade2) ? $registro->atividade2 :''}}"><br>
<input type="text" name="atividade3" class="form-control" placeholder="Digite 3° atividade " value="{{isset($registro->atividade3)? $registro->atividade3:''}}"><br>
<input type="date" name="data" value="{{isset($registro->data)?$registro->data:''}}"><br> 