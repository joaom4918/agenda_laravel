@include('layout.base')


<div class="row">
  @foreach ($registros as $registro)
    <div class="card mt-4 m-2" style="width: 18rem;">
        <img src="https://c1.wallpaperflare.com/preview/505/551/770/calendar-date-time-month.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Atividades do dia </h5>
          <p class="card-text">{{date('d/m/Y',strtotime($registro->data))}}</p> 
          <a href="{{route('admin.atividades.editar',$registro)}}" class="btn btn-primary">saiba mais</a>
        </div>
      </div>
    @endforeach
    

</div>
