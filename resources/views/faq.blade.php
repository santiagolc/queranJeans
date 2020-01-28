@extends('plantilla')

@section("titulo")

QueranJeans - PREGUNTAS FRECEUNTES

@endsection

@section("principal")
  <!-- MAIN -->
  <main class="preguntas">
                <h1>PREGUNTAS FRECUENTES</h1>
                <h3>¿COMO HAGO LA COMPRA?</h3>
                    <ol >
                        <li>Navega por el sitio y elegi lo que mas te guste.</li>
                        <li>Agregalo al carrito.</li>
                        <li>Si queres seguir agregando productos continua navegando, caso contrario clickeas en "Finalizar." </li>
                        <li>Para continuar es necesario <a href="/login">ingresar a tu cuenta</a>. Si no tenes una cuenta, hace click en "Registrarse".</li>
                        <li>Segui todas las instrucciones una por una (informacion de envio, metodo de envio, informacion de pago, metodo de pago)</li>
                        <li>Cuando hayas terminado y confirmes el pedido, LISTO!. Te mantendremos al tanto del estado de tu pedido.</li>
                    </ol>

                <h3>¿COMO HAGO PARA REGISTRARME?</h3>
                <p>Facil: <a href="/register">ingresa aqui</a>, completa los datos y listo!.</p>

                <h3>¿PUEDO EDITAR MIS DATOS UNA VEZ QUE ME HAYA REGISTRADO?</h3>
                <p>Si claro accediendo a tu perfil, podras editar tus datos, cambiar contraseña y agregar una foto de perfil!.</p>

                <h3>¿PUEDO VER LAS COMPRAS QUE YA REALICE?</h3>
                <p>Si, accediendo a tu perfil podras ver todas las compras que ya realizaste en QueranJeans.</p>

                <h3>¿PUEDO RETIRAR MI PEDIDO PERSONALMENTE?</h3>
                <p>No, solo enviamos los productos al domicilio que nos indiques previo contacto, elegi la provincia en la vivis editando tu perfil.</p>

                <h3>¿HAY STOCK SIEMPRE DE TODOS LOS PRODUCTOS?</h3>
                <p>Si, todo lo que publicamos tiene stock, de lo contrario no podrias agregarlo al carrito.</p>

                <h3>¿PUEDO CANCELAR MI PEDIDO?</h3>
                <p>Si, podes hacerlo comunicandote con <a href="#nosotros">nosotros</a>. Recorda tener tu numero de pedido.</p>

            </main>
@stop