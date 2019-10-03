<?php

// Validación de campo requerido
function validarCampoRequerido($input) {
    if (empty($input)) {
        echo "<p> Debes completar este Dato </p>" ;
}
}

// Validación de campo E-mail
function validarEmail($input) {
  if (empty($input)) {
      echo "<p> Debes completar este Dato </p>";
  }elseif (!filter_var($input,FILTER_VALIDATE_EMAIL)) {
      echo "<p> Debes ingresar un E-mail válido </p>";
  }

}

// Validación de constraseñas
function validarConstraseñaRegistro($input1,$input2) {
    if ($input1 !== $input2) {
        echo "<p> Las contraseñas deben coincidir </p>";
    }
}

  // Agregar nuevo usuario
function agregarNuevoUsuario($campo1,$campo2,$campo3) {
    $usuario = [
    "nombre" => $campo1,
    "email" => $campo2,
    "password" => password_hash($campo3,PASSWORD_DEFAULT),
  ];
  // Obtencion y lectura del archivo JSON
  $JSON = file_get_contents("usuariosRegistrados.json");
  // Transformar el contenido de usuariosRegistrados.json a un array
  $usuarios = json_decode($JSON,true);
  // Agregarle al array de todos los usuario el nuevo usuario
  $usuarios [] = $usuario;
  //  Transformar el array final de nuevo a JSON.
  $usuarios = json_encode($usuarios);
  // Sobreescribir usuariosRegistrados.json con el contenido final.
   file_put_contents("usuariosRegistrados.json", $usuarios);

}

 ?>
