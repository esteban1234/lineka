<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<div class="logol">
    <figure class="logo">
        <img src="../img/lineka.png" alt="LINEKA" class="img-responsive">
    </figure>
    <div class="openclose">
      <i class="fa fa-bars open" aria-hidden="true"></i>
    </div>  
</div>

<div class="menu">
    <nav>
        <ul>
            <a class="selector" href="../index.php">INICIO</a>
            <a class="selector" href="nosotros.php">NOSOTROS</a>
            <a class="selector" href="servicios.php">SERVICIOS</a>
            <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
    </nav>
</div>

<div class="inner contact container">
          <h1 class="tit-fc">Formulario de contacto</h1> <br>
          <p class="subtit-fc">Si quieres contactar con nosotros o tienes alguna consulta, no dudes en hacerlo. ¡Estaremos encantados de atenderte!</p><br><br>
                <div class="contact-form">
      
                    <form id="contact-us" method="post" action="#" onSubmit="return false">
        
                        <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
              
                            <input type="text" name="name" id="txtNOMBRE" required="required" class="form" placeholder="Nombre Completo" />

                            <input type="email" name="mail" id="txtCORREO" required="required" class="form" placeholder="Correo" />

                            <input type="text" name="subject" id="txtTELEFONO" required="required" class="form" placeholder="Teléfono" />
                        </div>
           
                        <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInRight" data-wow-delay=".5s">
             
                            <textarea name="message" id="txtCOMENTARIO" class="form textarea"  placeholder="Comentario" required="required"></textarea>
                        </div>

                        
                      
                        <div class="relative fullwidth col-xs-12">
                            <div id="_AJAX_PRE_"></div>
                            <button type="submit" id="submit" name="submit" class="form-btn semibold" onclick="sendCORREO()">Enviar Mensaje</button> 
                        </div>
                        
                        <div class="clear"></div>
                    </form>

                    
                    <div class="mail-message-area">
                        
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div>
            </div>


            <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
<h1 class="tit-ic">Información de contacto</h1><br>
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-3 col-lg-offset-2 col-xs-12 first-box">
        <h1><span class="glyphicon fas fa-phone-volume"></span></h1>
        <h3>Teléfono</h3>
        <p>PENDIENTE</p><br>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3 col-xs-12 third-box">
        <h1><span class="glyphicon fas fa-envelope"></span></h1>
        <h3>E-mail</h3>
        <p>info@consultorialineka.com</p><br>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3 col-xs-12 fourth-box">
      <h1><span class="glyphicon fas fa-clock"></span></h1>
        <h3>Horario</h3>
        <p>Lunes a Viernes de 9am a 6pm</p><br>
    </div>
  </div>
</div>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
</body>
</html>
