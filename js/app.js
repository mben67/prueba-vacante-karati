
    
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
        funci??n complementaria para la validaci??n y evitar que el campo password 1 este vacio
    */
    function check(input) {
        if (input.value != document.getElementById('password1').value) {
            input.setCustomValidity('Las Contrase??as deben ser iguales!');
        } else {
            input.setCustomValidity('');
        }
    }

    /*
        funci??n que valida que s??lo n??meros sean ingresados en el campo de tel??fono
    */
    function phonenumber(inputtxt) {
        var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        
        if(inputtxt.match(phoneno)) {
        return true;
    }else {
        alert("Solo n??meros en en el campo de Tel??fono!");
        return false;
    }
}