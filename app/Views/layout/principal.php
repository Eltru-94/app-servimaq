<!DOCTYPE html>
<!--
Template Name: Shiphile
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url('/styles/layout.css') ?>">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<style>
.responsive {
    width: 50%;
    height: auto;
}
</style>

<body id="top">

    <div class="bgded overlay" style="background-image:url('<?= base_url('images/demo/backgrounds/fondocuadros.png') ?>');">



        <div class="wrapper row1">
            <nav id="mainav" class="hoc clear">
                <div class="row">
                    <div class="col-md-2 col-sm-12 col-lg-2">
                        <br>
                        <img src="<?= base_url('images/demo/backgrounds/logo.png') ?>"
                            style="width: 300px; height: 100px;">
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <ul class="clear">

                            <li id="inicio"><a href="/">Inicio</a></li>
                            <li id="nosotros"><a href="/nosotros">Nosotros</a></li>

                           
                            <li class="no-active drop"><a href="#">Productos</a>
                                <ul>
                                    <li class="drop"><a href="#">Maquinas</a>
                                        <ul>
                                            <li><a href="/productos/maquina/recta">Recta</a></li>
                                            <li><a href="/productos/maquina/overlok">Overlock</a></li>
                                            <li><a href="/productos/maquina/recubridora">Recubridora</a></li>
                                            <li><a href="/productos/maquina/especiales">Especiales</a></li>
                                            <li><a href="/productos/maquina/domesticas">Domesticas</a></li>
                                            <li><a href="/productos/maquina/cortadoras">Cortdoras</a></li>
                                            <li><a href="/productos/maquina/bordadoras">Bordadoras</a></li>
                                        </ul>
                                    <li class="drop"><a href="#">Repuestos</a>
                                        <ul>
                                            <li><a href="/productos/repuestos/recta">Recta</a></li>
                                            <li><a href="/productos/repuestos/overlok">Overlock</a></li>
                                            <li><a href="/productos/repuestos/recubridora">Recubridora</a></li>
                                            <li><a href="/productos/repuestos/especiales">Especiales</a></li>
                                            <li><a href="/productos/repuestos/domesticas">Domesticas</a></li>
                                            <li><a href="/productos/repuestos/cortadoras">Cortdoras</a></li>
                                            <li><a href="/productos/repuestos/bordadoras">Bordadoras</a></li>
                                        </ul>


                                    </li>

                                    <li class="drop"><a href="/productos/repuestos/insumos">Insumos</a>
                                    </li>


                                </ul>
                            </li>
                            <li id="sugerencias"><a href="/sugerencias">CONTACTOS</a></li>
                    </div>
                    <div class="col-md-2">

                    </div>

                </div>
                <!-- ################################################################################################ -->
            </nav>
        </div>



        <?= $this->renderSection('contenido')?>



    </div>

    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">

            <div class="group">
                <!-- ################################################################################################ -->
                <div class="one_quarter first">
                    <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                        <iframe style="height: 350px; width: 450px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9574.969804193002!2d-78.2729798443904!3d0.23080736946416894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a1550f5c074b7%3A0xbeb06f4f58958f93!2sServimaq%20Importador%20Textil!5e0!3m2!1ses!2sec!4v1660200878958!5m2!1ses!2sec"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="one_quarter">
                    <br>
                </div>
                <div class="one_quarter">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"> Sucursales</i>
                            <hr>
                            <small> <i class="fas fa-home"></i> &nbsp;Av. Quito entre Sucre y Bolivar diagonal al Cuerpo
                                de
                                Bomberos.</small>
                            <hr>
                            <small><i class="fas fa-home"></i> &nbsp; Atuntaqui, Av. General Enriquez y Espejo.</small>
                            <hr>
                            <small><i class="fas fa-home"></i> &nbsp; Ibarra, Calle Sanchez y Cifuentes y
                                Velasco.</small>
                            <hr>
                        </li>


                        <li><i class="fas fa-phone mt-4 fa-2x"> Telefono</i>
                            <p>+ 055 0983003637</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"> Correo</i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center">

                <ul class="faico clear">
                    <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
                </ul>

            </div>
        </footer>

    </div>




    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">alexskate19@gmail.com</a>

            <p class="fl_right">Importadora <a target="_blank" href="https://www.os-templates.com/"
                    title="Free Website Templates">DNS</a></p>

        </div>


    </div>

    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('/scripts/jquery.min.js')  ?>"></script>
  
    <script src="<?= base_url('scripts/jquery.mobilemenu.js') ?>""></script>
</body>

</html>