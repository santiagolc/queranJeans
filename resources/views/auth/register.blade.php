@extends('plantilla')

@section("titulo")

QueranJeans - REGISTRO

@endsection

@section("principal")
<div class="containerRegistro">
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                <p class="error" id="shortName">El nombre debe tener al menos 6 caracteres</p>
                @error('name')
                    <span class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"  autocomplete="surname" autofocus>
                <p class="error" id="shortSurnameError">El apellido debe tener al menos 6 caracteres</p>
                @error('surname')
                <span class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </span>
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
                <span class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                <p class="error" id="shortPassword">El password debe tener al menos 6 caracteres</p>
                @error('password')
                <span class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma tu Contraseña') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                <p class="error" id="passwordMatcherror">Los passwords no coinciden</p>
            </div>
        </div>
            </br>
        <div class="form-group row" style="display:none;">
            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Subi tu Avatar') }}</label>

            <div class="col-md-6">
                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar" autofocus>

                @error('avatar')
                <span class="invalid-feedback" role="alert" style="color:red; font-size:16px;">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
            
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" disabled id="submitButton">
                    {{ __('Registrate') }}
                </button>
            </div>
        </div>
    </form>
</div>
<script src="/js/formvalidation.js"></script>
@endsection
