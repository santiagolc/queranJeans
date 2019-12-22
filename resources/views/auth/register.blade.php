@extends('plantilla')

@section("titulo")

QueranJeans - REGISTRO

@endsection

@section("principal")

        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="titulo">
                <h2>REGISTRO</h2>
            </div>
            
            <div class="formulario">
            <label for="name">{{ __('nombre') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Tu nombre" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            
            <div class="formulario">
            <label for="surname">{{ __('apellido') }}</label>
            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" placeholder="Tu apellido" required autocomplete="surname" autofocus>
            @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>    

            <div class="formulario">
            <!-- IMPORTANTE -->
            <label for="email" >{{ __('email') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Tu email" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="formulario">
            <label for="password" >{{ __('contraseña') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="formulario">
            <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="nacimiento formulario">
                <label for="nacimiento" required>Fecha de Nacimiento:</label>
                    <div class="diaMesAnio">
                        <select id="dia" name="dia">
                            <?php
                                //Desplegable de DIAS
                                for($dia=1; $dia <= 31 ; $dia++) {
                                echo '<option value='.$dia.'>'.$dia.'</option>';
                                }
                            ?>
                        </select>
                        <select id="mes" name="mes">
                            <?php
                                //Desplegable de MESES
                                $arrayMeses = [   "1" => "Ene", "2" => "Feb", "3" =>
                                                "Mar", "4" => "Abr", "5" => "May", "6" =>
                                                "Jun", "7" => "Jul", "8" => "Ago", "9" =>
                                                "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dic"
                                            ];
                                foreach($arrayMeses as $meses => $mes) {
                                    // <option value="1">Ene</option>
                                    // ... Hasta Diciembre
                                    echo "<option value=$meses>$mes</option>";
                                }
                            ?>
                        </select>
                        <select id="anio" name="anio">
                            <?php
                                //Desplegable de AÑOS
                                for($anio=1920; $anio <= 2019 ; $anio++) {
                                echo "<option value=".$anio.">".$anio."</option>";
                                }
                            ?>
                        </select>
                    </div>
            </div>
            <div class="sexo formulario">
                <label for="sex">Sexo:</label>
                <br>
                <input id="masculino" type="radio" name="sex" value="1" required><label for="masculino" > Masculino</label>
                <br>
                <input id="femenino" type="radio" name="sex" value="2"><label for="femenino"> Femenino</label> <p Style="color: red"></p>
            </div>
            <div class="avatar">
            <label for="avatar">Subi tu Foto de Perfil!</label> <br>
                <input  class="inputfile" type='file' name='avatar' id='avatar' value='' maxlength="50" /><br>
                <span id='register_avatar_errorloc' class='error'></span>
            </div>
            <div class="pregunta">
            <label for="question">Pregunta Secreta</label><br>
            <select name="question" id="question">
                    <option value="question1">Nombre de tu mascota</option> 
                    <option value="question2">Equipo de futbol</option> 
                    <option value="question3">Pelicula favorita</option>
                </select>
            </div>
            <div class="respuesta">
            <label for="answer">Respuesta</label> <br>
                <input type='text' name="answer" id="answer" /><br/>
            </div><br>
            <div class="formulario mailing">
                <label for="mailing">Deseo recibir ofertas y promociones</label>
                <input id = mailing type="hidden" name="mailing" value="0" checked="checked"> 
                <input id="mailing" type="checkbox" name="mailing" value="1" />
            </div>
            <br>
            <div class="submit formulario">
                <button class="boton1" type="submit">ENVIAR</button> 
                <button class="boton1" type="reset">BORRAR</button> 
           </div>
        </form>
@stop
