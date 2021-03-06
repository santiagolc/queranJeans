@extends('plantilla')

@section("titulo")

QueranJeans - REGISTRO

@endsection

@section("principal")
<div class="containerRegistro">
    <form class="formRegistro" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="given-name" autofocus>
                <p class="error" id="shortName">Tu nombre es muy corto!</p>
                @error('name')
                    <p class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"  autocomplete="family-name" autofocus>
                <p class="error" id="shortSurnameError">Tu apellido es muy corto!</p>
                @error('surname')
                <p class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                <p class="error" id="shortEmail">Este email es muy corto</p>
                <p class="error" id="emailFormatError">No tiene formato de Email</p>
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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                <p class="error" id="shortPassword">La contraseña debe tener al menos 4 caracteres</p>
                @error('password')
                <p class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar tu Contraseña') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                <p class="error" id="passwordMatcherror">Los passwords no coinciden</p>
            </div>
        </div>
            
        
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" id="submitButton" disabled>
                    {{ __('Registrate') }}
                </button>
            </div>
        </div>
    </form>
</div>
<script src="/js/formvalidation.js"></script>
@endsection
