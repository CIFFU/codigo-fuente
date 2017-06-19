<?php include("header.php"); ?>

<div class="row">
  <h2>Contacto</h2>

  <p>Si desea comunicarse con nosotros puede utilizar la información de contacto disponible al final de este sitio web o si lo prefiere puede usar el siguiente formulario de contacto.
  </p>

  <form class="formulario-contacto">
  <div class="row">
    <div class="medium-6 columns">
      <label>Nombre:
        <input type="text" placeholder="Nombre de quien envia el mensaje">
      </label>
    </div>
    <div class="medium-6 columns">
      <label>Correo Electrónico:
        <input type="text" placeholder="Su correo electrónico para fines de contacto">
      </label>
    </div>
  </div>
  <div class="row">
    <label>
  Mensaje:
  <textarea  placeholder="Mensaje a enviar"></textarea>
</label>
<div class="input-group-button">

  <input type="submit" class="button" value="Enviar mensaje">


</div>
  </div>
</form>


</div>

<div class="reveal" id="modalCorreoEnviado" data-reveal>
  <h1>Mensaje enviado</h1>
  <p class="lead">Su mensaje ha sido enviado y nos pondremos en contacto a la breveda posible.</p>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php include("footer.php"); ?>
