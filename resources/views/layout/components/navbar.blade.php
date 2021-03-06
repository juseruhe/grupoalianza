<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-globe"></i> Paises
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('country.index')}}">Mostrar Paises</a></li>
            <li><a class="dropdown-item" href="{{route('country.create')}}"> Crear País</a></li>
        
          </ul>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-address-book"></i> Cargos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('position.index')}}">Mostrar Cargos</a></li>
            <li><a class="dropdown-item" href="{{route('position.create')}}"> Crear Cargo</a></li>
        
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-venus-mars"></i> Generos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('gender.index')}}">Mostrar Género</a></li>
            <li><a class="dropdown-item" href="{{route('gender.create')}}"> Crear Género</a></li>
        
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-address-card"></i> Tipos de Documento
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('document_type.index')}}">Mostrar Tipos de Documento</a></li>
            <li><a class="dropdown-item" href="{{route('document_type.create')}}"> Crear Tipo de Documento</a></li>
        
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-city"></i> Ciudades
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('city.index')}}">Mostrar Ciudades</a></li>
            <li><a class="dropdown-item" href="{{route('city.create')}}"> Crear Ciudad</a></li>
        
          </ul>
        </li>



      </ul>
    </div>
  </div>
</nav>