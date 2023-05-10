@include('layout.base')



<table class="table table-bodered">
    <thead>
        <th>id</th>
        <th>Atividade 1 </th>
        <th>Atividade 1 </th>
        <th>Atividade 3 </th>
        <th>Opções</th>
    </thead>

    <tbody>
        @foreach ($registros as $registro)
            
        <tr>
            <td>{{$registro->id}}</td>
            <td>{{$registro->atividade1}}</td>
            <td>{{$registro->atividade2}}</td>
            <td>{{$registro->atividade3}}</td>
            <td><a class="btn btn-danger" href="{{route('admin.atividades.excluir',$registro->id)}}"><i class="fas fa-trash-alt"></a></i></td>
           
        </tr>
        @endforeach


     
    </tbody>
</table>


<a  class="btn btn-primary" href="{{route('admin.atividades.adicionar')}}">agendar mais atividades</a> 


