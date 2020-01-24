@extends('plantilla')

@section("titulo")

QueranJeans - RESTAURAR CONTRASEÑA

@endsection

@section("principal")
<div class="container">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Ingresa aqui el mail con el que te registraste, <br> te enviaremos un link y asi podras restaurar tu contraseña</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button class="boton1" type="submit" class="btn btn-primary">
                        {{ __('Enviar link') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
