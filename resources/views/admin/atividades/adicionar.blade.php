@include('layout.base')


<div class="container mt-5">

 

    <h1>adicionar nova atividade</h1> 
    <form action="{{route('admin.atividades.salvar')}}" method="post">

    {{ csrf_field() }}

    @include('admin.atividades.form')  

    <button class="btn btn-primary"><i class="fas fa-save">  Salvar</i></button> 
   

</form>
</div>

