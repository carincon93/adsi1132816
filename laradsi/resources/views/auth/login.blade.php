@extends('layout-app.welcome')

@section('title', 'Ingreso de Usuario')

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <small>@lang('login.lang')</small>
            <a href="{{ url('login/en') }}" class="btn btn-info btn-xs">English</a>
            <a href="{{ url('login/es') }}" class="btn btn-info btn-xs">Español</a>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading"><h4>@lang('login.title')</h4></div>
                <div class="panel-body">
                    @include('layout-app.errors')
                    <form class="form" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="@lang('login.pEmail')" value="{{ old('email') }}" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="@lang('login.pPassword')" required="">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                @lang('login.button')
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                @lang('login.forgot')
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
