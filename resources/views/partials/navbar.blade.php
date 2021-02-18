<nav class="navbar navbar-expand-lg nnavbar navbar-dark" style="background-color: #04384e;">
    <div class="container">
        <a href='/' style="padding: 0; margin:0"><img style="width: 60px;" src="https://www.tecnica3mdp.edu.ar/imagenes/informatica/img22.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link text-white" href="{{url('/catalog')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true">&#128196</span>
                            Catálogo
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link text-white" href="{{url('/catalog/create')}}">
                            <span>&#10010</span> Añadir Reparación
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/search/') ? 'active' : ''}}">
                        <form class="d-flex" action='' method="POST" >
                            {{ csrf_field() }}
                            <input type="text" name ='id_cli' id='id_cli' class="form-control me-2" style="width:200px; height:30px; margin-top:5px; " placeholder="Identificación del Cliente" >
                            <button type="submit" class="btn bg-info text-white" style="height:30px; margin-top:5px; padding-top:2px;" >Buscar</button>
                        </form>
                    </li>
                    
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link text-white" style="display:inline;cursor:pointer"><span>&#215</span>
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
