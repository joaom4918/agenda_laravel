@include('layout.base');
<h1>Atualizar</h1>

<form action="{{route('admin.atividades.atualizar',$registro->id)}}" method="post">

    {{ csrf_field() }} 

    @include('admin.atividades.form')
    <input type="hidden" name="_method" value="put"> 
    <br>

    <button class="btn btn-primary">atualizar</button>
 
</form>