<?php 
@section("principal")
?>

 <!-- BANNER -->
 <div class="banner">
            <img src="images/547128-banner.jpg" alt="banner">
        </div>
        <!-- SECTION -->
        <section class="productos">
            <hr><h2 class="titulo">PRODUCTOS DESTACADOS</h2><hr>
            <div class="ofertas">
                <!--Molde Article en HTML-->
                <!--<article class="oferta">
                <img src="images/ropa1.jpg" alt="ropa">
                <div class="datos">
                    <span>TITULO PRODUCTO</span>
                    <span>$ VALOR</span>
                    <a href="#">COMPRAR</a>
                </div>
                <div class="descuento">
                    <span>30%</span>
                </div>
                </article> -->
                <?php
                verTodosOferta2($productos);
                ?>
            </div>
            <div class="jeans">
                <!--Molde Article en HTML-->
                <!--<article class="jean">
                    <img src="images/jean1.jpg" alt="ropa">
                <div class="datos2">
                    <span>JEANS HOMBRE</span>
                    <a href="#">VER</a>
                </div>
                </article> -->
                <?php
                verTodosJeans2($jeans);
                ?>
            </div>
            <div class="remeras">
                <!--Molde Article en HTML-->
                <!--<article class="remera">
                    <img src="images/remera1.jpg" alt="ropa">
                    <div class="datos2">
                        <span>REMERAS HOMBRE</span>
                        <a href="#">VER</a>
                    </div>
                </article>-->
                <?php
                verTodosRemera2($remeras);
                ?>
    </div>
        </section>
<?php         
    @endsection
?>