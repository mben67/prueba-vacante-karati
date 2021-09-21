<!-- 
    Formulario de registro de usuario realizado para solicitar 
    la Vacante de Programador PHP en empresa Karati.com

    Tecnologías Usadas
    Font-End:
        Html5
        CSS
        Framework css Bootstrap 5
        Javascript
        JQuery 3.6.0
    
    Back-End:
        Php 7.4.6
        MySQl

    Desarrollador: Moisés Benjamín Ibarra Carrillo
    versión 1.0 20/09/2021

    Presentación:
    El diseño del presente formulario se creo teniendo como base 
    la paleta de colores del sitio de la empresa Karati.com

    El Diseño permite en la parte izquierda desplegar una imagen
    que invoque al usuario a la acción de suscribirse al sitio
    
    En la parte de programación se uso Bootstrap y Javascript puro 
    para la validación del formulario, antes de enviarse la data 
    al servidor

-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!--se añade el Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!--se añade jquery para usar el ajax-->
    <script src="js/jquery-3.6.0.min.js"></script>
    
    <title>Karati - Registro de Usuario</title>
</head>
<body>


<div class="float-start p-4 col-lg-5 offset-lg-0" id="ZonaIzquierda">
    
    <!--Logotipo de la empresa-->
    <div id="logo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125.26 72.32"><defs><style>.cls-1{fill:#653387;}</style></defs><title>Recurso 1KARATI</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M68.72,66.05c-2.57,2.74-5.37,5.58-9.16,5.62-7.64.69-13.82-5.89-17.1-12C37.78,52,36,42.47,27.84,36.8,40.08,31,49,17,61.83,12.68c2.76-.59,6.18-.67,8.29,1.41a4.25,4.25,0,0,1,1,3.53c-.93,2.25-3.45,2.93-5.81,2.81A3.74,3.74,0,0,1,62.89,18a.86.86,0,0,0-.88.36,1.6,1.6,0,0,0,.36,1.92c3,1.72,7.12.78,9.68-1.22a3.79,3.79,0,0,0,1.06-3.87c-1.43-3.14-5-3.21-8.11-3.53C49.24,12.89,38.83,27.2,26.25,36.09a17,17,0,0,0-6.35-.15c2.87-5.74,4.26-12.39,9.71-16.76-2.11.08-3.92,2.47-6.34,1.77-4.78-3-12-5.52-17.27-1.93C2.67,20.9-.25,24.43,0,28.18c.06.68.85,1.25,1.4,1.57.75.19,2.85.63,2.29-1.06-.22-.35-.6-.35-.88-.51A2.85,2.85,0,0,1,1.24,25a11.16,11.16,0,0,1,9.86-6.53c5,.3,8.67,4.76,13.93,3.36v.34C23.1,23.67,22.3,25.6,21,27.28l-10.38,24-1.4,2.3a3.48,3.48,0,0,1-2.82.88v.7L15.68,55V54.6a3.17,3.17,0,0,1-3-1.06c1.55-5.23,3.94-10.12,6-15.14l.72-.9c2,1.53,4.55.16,6.69-.16a16.63,16.63,0,0,1,4.38,5.29C35.13,51.52,36.84,62,46,68.7c6,4.22,15.34,4.76,22,1.57a4,4,0,0,0,2.11-3.69.92.92,0,0,0-1.4-.53M20.26,37c1.16-.92,2.7-.5,4.23-.35-1.15.4-2.94,1.53-4.23.35"/><path class="cls-1" d="M116.28,30.81a1.74,1.74,0,0,0,1-1.57,2,2,0,0,0-2.3-1.06,1.57,1.57,0,0,0-1.22,1.57c.33,1.16,1.68,1.12,2.47,1.06"/><path class="cls-1" d="M125.24,33.47c-.13-.61-.81-.7-1.21-1.06-6.11-1.26-11.71,1.4-17.27,1.92a21.4,21.4,0,0,0,1.41-3.67l-3.52-.2-.72.35c1,1.53-.32,2.94-.87,4.23-3.22.66-6.21-.28-9-1.23,2.25,1.93,5.56,1.83,8.44,1.77l.36.36c-2.47,5.56-5.31,11-7.39,16.72A2.7,2.7,0,0,0,96,55.48c1.57.4,3-.54,4.41-1.22,1.62-1.28,3.85-2.93,4.39-4.94-1.43.88-2.63,2.31-4,3.17-.56.23-2,.44-1.76-.7a168.73,168.73,0,0,1,7.39-16.57c5.88-.7,12.52-3.27,18.32-.53a1.19,1.19,0,0,0,.52-1.22"/><path class="cls-1" d="M20.26,37c1.29,1.18,3.08,0,4.23-.35-1.53-.15-3.07-.57-4.23.35"/><path class="cls-1" d="M64.48,37c-1.71,0-3.77-.24-4.41,1.57-.42-.26-.47-.71-.7-1.06a4.43,4.43,0,0,0-3.17-.7C49.55,38.27,44,45,41.75,51.07c-.21,1.36-.54,3.32.89,4,4.68,1.19,8.09-3.2,11.27-6.33.19,1.85-1.22,3.45-.7,5.63a1.79,1.79,0,0,0,2.28,1.24c2.75-.9,5.22-3.57,6.88-6-.09-.08-.24-.18-.19-.34-1.52,1-2.77,3.34-4.92,3.17a1.74,1.74,0,0,1-.53-1.6c1.33-5.14,4.75-9.44,7.75-13.9M56,44.91c-1.89,3.12-4.64,6.41-8.42,7.4,0,0-1.3.39-1.64,0,0,0-1.06-.94.09-3.5,1-2.3,4.21-9.78,10.83-11.34.77-.17,1.05.19,1.05.19,1.83,2.2-.66,5.12-1.91,7.22"/><path class="cls-1" d="M97.56,37c-1.69,0-3.76-.24-4.4,1.57-.43-.26-.48-.71-.71-1.06a4.43,4.43,0,0,0-3.17-.7C82.63,38.27,77.09,45,74.84,51.07c-.22,1.36-.55,3.32.89,4,4.67,1.19,8.08-3.2,11.27-6.33.18,1.85-1.22,3.45-.71,5.63a1.8,1.8,0,0,0,2.29,1.24c2.74-.9,5.22-3.57,6.87-6-.09-.08-.22-.18-.18-.34-1.53,1-2.78,3.34-4.93,3.17a1.71,1.71,0,0,1-.52-1.6c1.32-5.14,4.74-9.44,7.74-13.9m-8.44,7.92c-1.89,3.12-4.63,6.41-8.42,7.4,0,0-1.3.39-1.64,0,0,0-1.07-.94.09-3.5,1-2.3,4.21-9.78,10.83-11.34.76-.17,1,.19,1,.19,1.83,2.2-.65,5.12-1.91,7.22"/><path class="cls-1" d="M80.5,37.16c-5.44-.78-8.94,5.23-11.78,9L68.53,46c1.13-3,2.63-5.86,3.52-9a24.25,24.25,0,0,1-4.39-.19v.7c.49-.16.73.27,1.06.55-2,6-5.27,11.43-7.24,17.43a4.44,4.44,0,0,0,2.81-.18c2.58-5.09,5-10.56,10.23-14.27,1.78-1.48,4.22-1.4,6.34-2.12.4-.56,0-1.28-.36-1.75"/><path class="cls-1" d="M114.87,36.8h-4.59l-.19.36a.8.8,0,0,0,.91.34c.62.34.22,1.07.34,1.6-1.77,4.48-4.25,8.65-5.83,13.21-.09.95-.7,2.56.55,3.17,2.25.43,4.09-1.22,5.8-2.63,1-1.12,2.56-2.21,2.47-3.53-1.65,1.13-3.18,3.76-5.46,3.17V51.43c1.7-5,4.33-9.6,6-14.63"/><path class="cls-1" d="M92.6,23.65a3,3,0,0,0-2,3.39c.26,2,1.94,4.12,3.33,4.12a1.27,1.27,0,0,0,.89-.37A1.4,1.4,0,0,0,95.27,29c-2.21-2.18-3.21-3.82-3-4.86a1.13,1.13,0,0,1,.29-.53"/><path class="cls-1" d="M98.28,25.17c-6.25,1-5.71-.94-5.41-1.54l0,0a.92.92,0,0,0-.38.55l0,.15c.07.58,1,1.55,4.79,2.93a1.24,1.24,0,0,1,.49.68c.93-.27,1.58-.77,1.58-1.54,0-1.42-1-1.26-1-1.26"/><path class="cls-1" d="M97.15,27.42c-2.63-1-4.21-1.83-4.7-2.61.14.79.84,2.08,2.93,4.14a1.4,1.4,0,0,1,.13,1l.38,0a1.57,1.57,0,0,0,1.56-.84c.51-1.24-.29-1.72-.3-1.73"/><path class="cls-1" d="M90.25,18.08a13.42,13.42,0,0,0,2.5-3.28,2.05,2.05,0,0,1,.08-.2,6.22,6.22,0,0,1,2.52-3.31,4.73,4.73,0,0,1,2.46-.71l.36,0c-.1-2-1-6.1-5.35-10.57,0,0-.35-.44-.53,1.58,0,0-.63-.47-.54,1.52,0,0-.66-.8-.61,1.72,0,0-.93-.15-.37,3.36,0,0-.58,0-.07,2.28,0,0-.91-.28-.44,1.21a20.85,20.85,0,0,1,2.25,2.67,2.75,2.75,0,0,0-.57-.43c-2.7-2.1-7.33-5.31-11.82-6.56l-6.9-1.61c-1.57-.38-5-1-2.27,1.36,0,0-.35.51,2,2,0,0-1.14.46,2.11,2.28,0,0,.16,1.21,3.74,2.35,0,0-4.24-.94,1,2.1,0,0-.69.81,1.74,1.42,0,0-.41,1.55,2.48,1.58,0,0-.21,1.31,2.68.63A33.55,33.55,0,0,1,90,18.41Z"/><path class="cls-1" d="M95.42,11.41A6.15,6.15,0,0,0,93,14.65c0,.09-.06.16-.08.21a13.67,13.67,0,0,1-2.53,3.32l-.42.47c-1.51,1.68-.74,5.53.11,7.22a4.65,4.65,0,0,1,3.06-3,4.74,4.74,0,0,0,3.23-3.42c.54-2.48,2-3.08,2-3.11a4.56,4.56,0,0,1,1.31-.18c3.66,0,8.33,3.85,9.26,4.64a26.27,26.27,0,0,0-4.71-3.93,3.23,3.23,0,0,1-1.57-2.36,4.26,4.26,0,0,0-2.08-3,5.29,5.29,0,0,0-2.76-.85,4.68,4.68,0,0,0-2.39.69m4.71,1.79a.46.46,0,0,1,.35.56.47.47,0,0,1-.54.38.52.52,0,0,1-.39-.57.48.48,0,0,1,.58-.37"/></g></g></svg>
    </div>

    <!--se añade imagen que incentive al usuario a registrarse-->
    <img id="imagen-accion" src="img/cadena.jpg">

</div>

<div class="float-end p-4 col-lg-5 offset-lg-0" id="ZonaDerecha">
    
    <form role="form" id="formRegistro">
        
        <div class="row  d-grid gap-3">
            
            <div class="form-group">
                <label class="text-italic">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre(s)" required>
            </div>

            <div class="form-group">
                <label>Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoP" name="apellidoP" placeholder="Apellido Paterno" required>
            </div>
        
            <div class="form-group">
                <label>Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoM" name="apellidoM" placeholder="Apellido Materno" required>
            </div>

            <div class="form-group">
                <label>Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNac" name="fechaNac" placeholder="Fecha de Nacimiento" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="correo"  aria-describedby="emailHelp" placeholder="Correo Electrónico">
            </div>

            <div class="form-group">
                <label>Teléfono Celular (10 digitos)</label>
                <input type="tel" pattern="^\d{2}\d{4}\d{4}$" onchange="phonenumber(this.value)" id="TelCel"  class="form-control" placeholder="Teléfono Celular" required>
            </div>
            
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" id="password1" class="form-control" placeholder="Contrase&ntilde;a" required name=up>
            </div>

            <div class="form-group">
                <label>Confirmar Contraseña</label>
                <input type="password" id="password2" class="form-control" placeholder="Confirmar Contrase&ntilde;a" oninput="check(this)" required name=up2>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </div>
    
    </form>
</div>

<script src="js/app.js"></script>
</body>
</html>