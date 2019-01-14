@extends('layouts.dashboard')
@section('content')

<div class="card-deck">

    <div class="card border-0 h-100 justify-content-center">
        <div class="card-body card border-0 h-100 justify-content-center">
            <div class="gandalf m-auto">
                <img src="{{ asset('images/you_shall_not_pass.png') }}" alt="" class="img-fluid">
                <h3>YOU<br>SHALL NOT<br>PASS!</h3>
            </div>
        </div>
    </div>
    <div class="card border-0">
        <div class="card-body card border-0 h-100 justify-content-center">
                @if ($errors->has('email'))
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    {{ $errors->first('email') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if ($errors->has('password'))
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    {{ $errors->first('password') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input class="form-check-input text-center" type="checkbox" name="remember" id="remember" checked style="display: none;">

                <div class="form-group row {{ $errors->has('email') ? 'has-danger' : '' }}">
                    <input id="email" type="email" class="form-control border-0 text-center {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" placeholder="SPEAK" required autofocus>
                </div>

                <div class="form-group row {{ $errors->has('password') ? 'has-danger' : '' }}">
                    <input id="password" type="password" class="form-control border-0 text-center{{ $errors->has('password') ? 'is-invalid' : '' }}"
                        name="password" placeholder="FRIEND" required>
                </div>

                <div class="form-group row mb-0">
                    <button type="submit" class="btn border-0 text-dark w-100">
                        AND ENTER...
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection