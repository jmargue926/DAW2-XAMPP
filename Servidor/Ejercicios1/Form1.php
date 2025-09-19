<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado formulario</title>
</head>
<body>
    <h1>Resultado de formulario</h1>
    <?php
        $user = $_REQUEST["user"];
        $password = $_REQUEST["password"];
        $fullname = $_REQUEST["fullname"];
        $email = $_REQUEST["email"];
        $number = $_REQUEST["number"];
        $sex = $_REQUEST["sex"];
        $dir = $_REQUEST["dir"];
        $comunidad = $_REQUEST["comunidad"];
        $idiomas = $_REQUEST["idiomas"];
        $otros = $_REQUEST["otros"];
        $publi = $_REQUEST["publi"];

        echo "<p> hola " . $user . " ! </p>\n";
        echo "<p> No le digas a nadie que tu contraseña es: " . $password . "</p>\n";
        
        echo "<p> Sunombre completo es: " . $fullname . "</p>\n";
        echo "<p> Su correo electónicoes es: " . $email . "</p>\n";
        echo "<p> Su teléfono de contacto es es: " . $number . "</p>\n";
    
        if($sex == 'h')
            echo "<p> Ha seleccionado ser hombre </p>";
        else
            echo "<p> Ha seleccionado ser mujer </p>";

        echo "<p> Su dirección es: " . $dir . "</p>\n";
        if($comunidad == '-')
            echo "<p> No ha seleccionado CCAA</p>\n";
        else
            echo "<p> " . $comunidad . "</p>\n";
    ?>
</body>
</html>