<?php
  session_start();
  //$_SESSION ['usuario'] = "Cristian";

require_once('Bloques\P-arriba.php');
require_once('Bloques\Navegador.php');

?>

<section class="mb-4">
<header>
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contacta con nosostros</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Tienes alguna pregunta?. No dudes en contactar con nostros para cualquier sugerencia y nuestro equipo se pondrá en contacto contigo.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>
            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();"href="Send.php">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p> Avinguda de Vicent Sos Baynat, s/n, 12006 Castelló de la Plana, Castelló</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+34 671919365</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>al364400@uji.es</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
</header>
</section>

<?php

require_once('Bloques\P-abajo.php');

?>        
