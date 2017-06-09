@extends('layout-app.welcome')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Escritorio "Administrador"</div>

                <div class="panel-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge">{{ $ccats }}</span>
                            <a href="">Categorías</a></li>
                        <li class="list-group-item">
                            <span class="badge">{{ $carts }}</span>
                            <a href="">Artículos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection