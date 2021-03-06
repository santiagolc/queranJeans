@extends('plantilla')

@section("titulo")

QueranJeans - RESTAURAR CONTRASEÑA

@endsection

@section("principal")
<div class="container">
    <div class="card-body">
        {{ __('Por favor confirma tu contraseña antes de continuar') }}

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button class="boton1" type="submit" class="btn btn-primary">
                        {{ __('Confirmar Contraseña') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="linkOlvidaste" class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
