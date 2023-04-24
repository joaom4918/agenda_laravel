<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('site.home')}}"><i class="fas fa-home"> Pagina inicial</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.atividades.adicionar')}}"><i class="far fa-plus-square"> Adicionar Atividade</i></a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.atividades.lista_atividades')}}"><i class="far fa-address-book"> Lista de Atividades</i></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.atividades.relatorio')}}"><i class="fas fa-newspaper"> Relatorio</i></a> 
          </li>
        
        </ul>
      </div>
    </div>
  </nav>