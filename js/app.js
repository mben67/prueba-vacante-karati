
    
    $("#formRegistro").submit(function(event){
        //cancela el envio del formulario
        event.preventDefault();
        submitForm();
    });

    function submitForm(){
        
        let nombre =  document.getElementById("nombre").value;
        let apellido_pa = document.getElementById("apellidoP").value;
        let apellido_ma = document.getElementById("apellidoM").value;
        let nacimiento = document.getElementById("fechaNac").value;
        let correoUsuario = document.getElementById("correo").value;
        let celular = document.getElementById("TelCel").value;
        let password = document.getElementById("password1").value;

        $.ajax({
        type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
        url:"recibir.php", //url guarda la ruta hacia donde se hace la peticion
        dataType: 'json',
        contentType: "application/json",
        
        
        data: JSON.stringify({
                "nombreUsuario" : nombre,
                "apellidoPa" : apellido_pa,
                "apellidoMa" : apellido_ma,
                "fechaNacimiento" : nacimiento,
                "email" : correoUsuario,
                "phone" : celular,
                "password_user" : password
            }),
            
        
            success:function(response){ //success es una funcion que se utiliza si el servidor retorna informacion
                
                let k = jQuery.parseJSON(response);
                alert(JSON.stringify(k));

                if(k==true)
                {
                    alert('Gracias, Su registro fue Exitoso');
                    cleanForm();

                }else
                {
                    alert('Fallo algo, o no se recibieron bien tus datos');
                }
            },
     
            error: function(XMLHttpRequest, textStatus, errorThrown)
            { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }
            
            })
        }


    function cleanForm()
    {
        let nombre =  document.getElementById("nombre").value = "";
        let apellido_pa = document.getElementById("apellidoP").value = "";
        let apellido_ma = document.getElementById("apellidoM").value = "";
        let nacimiento = document.getElementById("fechaNac").value = "";
        let correoUsuario = document.getElementById("correo").value = "";
        let celular = document.getElementById("TelCel").value = "";
        let password = document.getElementById("password1").value = "";
        let password2 = document.getElementById("password2").value = "";
    }
    
    /*
        función complementaria para la validación y evitar que el campo password 1 este vacio
    */
    function check(input) {
        if (input.value != document.getElementById('password1').value) {
            input.setCustomValidity('Las Contraseñas deben ser iguales!');
        } else {
            input.setCustomValidity('');
        }
    }

    /*
        función que valida que sólo números sean ingresados en el campo de teléfono
    */
    function phonenumber(inputtxt) {
        var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        
        if(inputtxt.match(phoneno)) {
        return true;
    }else {
        alert("Solo números en en el campo de Teléfono!");
        return false;
    }
}