@extends('plantilla')

@section("principal")
  <!-- MAIN -->
  <main class="preguntas">
                <h1>PREGUNTAS FRECUENTES</h1>
                <h3>¿COMO HAGO LA COMPRA?</h3>
                    <ol >
                        <li>Navega por el sitio y elegi lo que mas te guste.</li>
                        <li>Asegurate de haber elegido el talle y el color correcto.</li>
                        <li>Agregalo al carrito.</li>
                        <li>Si queres seguir agregando productos continua navegando, caso contrario clickeas en "Finalizar." </li>
                        <li>Para continuar es necesario <a href="login.php">ingresar a tu cuenta</a>. Si no tenes una cuenta, hace click en "Registrarse".</li>
                        <li>Segui todas las instrucciones una por una (informacion de envio, metodo de envio, informacion de pago, metodo de pago)</li>
                        <li>Cuando hayas terminado y confirmes el pedido, LISTO!. Te mantendremos al tanto del estado de tu pedido.</li>
                    </ol>

                <h3>¿COMO HAGO PARA REGISTRARME?</h3>
                <p>Facil: <a href="registro.php">ingresa aqui</a>, completa los datos y listo!.</p>

                <h3>¿CON QUE MEDIOS DE PAGO PUEDO COMPRAR EN EL SITIO?</h3>
                <p>Nuestro sitio admite todos los medios de pago a traves de la plataforma de Mercado Pago.</p>

                <h3>¿HAY PROMOCIONES CON TARJETAS DE CREDITO?</h3>
                <p>Si, <a href="https://www.mercadopago.com.ar/ayuda/medios-de-pago-cuotas-promociones_264">aqui</a> podras ver las promociones vigentes que tiene Mercado Pago.</p>

                <h3>¿PUEDO RETIRAR MI PEDIDO PERSONALMENTE?</h3>
                <p>No, solo enviamos los productos al domicilio que nos indiques.</p>

                <h3>¿HAY STOCK SIEMPRE DE TODOS LOS PRODUCTOS?</h3>
                <p>Si, todo lo que publicamos tiene stock, de lo contrario no podrias agregarlo al carrito.</p>

                <h3>¿PUEDO CANCELAR MI PEDIDO?</h3>
                <p>Si, podes hacerlo comunicandote con <a href="#nosotros">nosotros</a>. Recorda tener tu numero de pedido.</p>

                <h3>¿COMO HAGO PARA RECIBIR LAS ULTIMAS NOVEDADES?</h3>
                <p>Cuando hagas el <a href="registro.php">registro</a> selecciona la opcion: "Deseo recibir ofertas".</p>
            </main>
@stop