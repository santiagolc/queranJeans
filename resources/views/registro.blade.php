@extends('plantilla')

@section("titulo")

QueranJeans - REGISTRO

@endsection

@section("principal")

    <!-- FORMULARIO DE REGISTRO -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="titulo">
            <h2>REGISTRO</h2>
        </div>
        <div class="formulario">
            <label for="nombre"></label>
            <input id="nombre" type="text" name="nombre" value="<?=$persistenciaNombre?>" required placeholder="Tu nombre" ><p Style="color: red"><?=$errorNombre?></p>
        </div>
        <div class="formulario">
            <label for="apellido"></label>
            <input type="text" name="apellido" value="<?=$persistenciaApellido?>" placeholder="Tu apellido" required><p Style="color: red"><?=$errorApellido?></p>
        </div>         
        <div class="formulario">
            <!-- IMPORTANTE -->
            <label for="mail"></label>
            <input id="mail" type="text" name="mail" value="<?=$persistenciaEmail?>" placeholder="Email:" required><p Style="color: red"><?=$errorEmail?></p><span style="color: red"><?=$errorMail?></span>
        </div>
        <div class="formulario">
            <label for="password"></label>
            <input id="password" type="password" name="password" value="" placeholder="Contraseña:"><p Style="color: red"><?=$errorPassword?></p>
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
            <label for="">Sexo:</label>
            <br>
            <input id="masculino" type="radio" name="sexo" value="0" required><label for="masculino" > Masculino</label>
            <br>
            <input id="femenino" type="radio" name="sexo" value="1"><label for="femenino"> Femenino</label> <p Style="color: red"><?=$errorSexo?></p>
        </div>
        <div class="avatar">
        <label for="avatar">Subi tu Foto de Perfil!</label> <br>
            <input  class="inputfile" type='file' name='avatar' id='avatar' value='' maxlength="50" /><br>
            <span id='register_avatar_errorloc' class='error'></span>
        </div>
        <div class="pregunta">
        <label for="preguntasecreta">Pregunta Secreta</label><br>
        <select name="preguntaSecreta" id="preguntaSecreta">
                <option value="preg1">Nombre de tu mascota</option> 
                <option value="preg2">Equipo de futbol</option> 
                <option value="preg3">Pelicula favorita</option>
            </select>
        </div>
        <div class="respuesta">
        <label for="respuestasecreta">Respuesta</label> <br>
            <input type='text' name="respuestasecreta" id="respuestasecreta" /><br/>
        </div><br>
        <div class="formulario mailing">
            <label for="recordame">Deseo recibir ofertas y promociones</label>
            <input id = recordame type="hidden" name="ofertas" value="0" checked="checked"> 
            <input id="recordame" type="checkbox" name="ofertas" value="1" />
        </div>
        <br>
        <div class="submit formulario">
            <button class="boton1" type="submit">ENVIAR</button> 
            <button class="boton1" type="reset">BORRAR</button> 
        </div>
    </form>
@stop
