<?php
/*
    Archivo que recibe via ajax los datos del formulario
    faltaria aqui definir que tipo de seguridad se le aplicaria 
    al archivo para evitar ejecucion saltandose el formulario
    podria ser un token, 
    eso ya se define dependiendo las circunstancias
*/

/*
    se revisa que se reciban todos los parametros, comparando 2 arrays
*/

$params_needed = ["nombreUsuario", "apellidoPa", "apellidoMa",
"fechaNacimiento", "email","phone","password"];
$given_params = array_keys($_POST);
$missing_params = array_diff($params_needed, $given_params);

if(!empty($missing_params))
{
    echo "false";
}
else


//se incluye la conexion a la bd
include 'classes/Conexion.php';

$nombre = $_POST["nombreUsuario"];
$apellidoPa = $_POST["apellidoPa"];
$apellidoMa = $_POST["apellidoMa"]; 
$fechaNacimiento = $_POST["fechaNacimiento"];
$email = $_POST["email"]; 
$phone = $_POST["phone"];
/*
    se encripta el password para almacenarlo en la bd
*/
$password_user = password_hash( $_POST["password_user"],PASSWORD_DEFAULT, [15]);



//se definen las variables de conexion aqui
define("DB_HOST", "");
define("DB_USER", "");
define("DB_PASS", "");
define("DB_NAME", "");

$database = new db();

$database->beginTransaction();

$database->query("INSERT INTO test ( nombreUsuario, 
                                        apellidoPa, 
                                        apellidoMa, 
                                        fechaNacimiento, 
                                        email, 
                                        phone, 
                                        password_user ) 
VALUES (:nombreUsuario, :apellidoPa, :apellidoMa, :fechaNacimiento,
:email, :phone, :password_user)");

$database->bind(':nombreUsuario',$nombre);
$database->bind(':apellidoPa',$apellidoPa);
$database->bind(':apellidoMa',$apellidoMa);
$database->bind(':fechaNacimiento',$fechaNacimiento);
$database->bind(':email',$email);
$database->bind(':phone',$phone);
$database->bind(':password_user',$password_user);

$database->execute();

echo "true";
?>