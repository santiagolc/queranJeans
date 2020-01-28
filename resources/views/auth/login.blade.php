@extends('plantillacorta')

@section("titulo")

QueranJeans - LOGIN

@endsection

@section("principal")

<div class="containerLogin">
    <form class="formLogin" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                @error('email')
                <p class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                </p>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                @error('password')
                <p class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Recuerdame') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div>
                <button class="boton1" type="submit" class="btn btn-primary">
                    {{ __('Ingresar') }}
                </button>
                <br>
                @if (Route::has('password.request'))
                 <a class="linkOlvidaste" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection
