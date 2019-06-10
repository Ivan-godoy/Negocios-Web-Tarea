<?php
function validaciones($datos){
    $archivo = explode('.', $_FILES['imagen']['name']);
    $nombre = '';
    $extencion = $archivo[count($archivo)-1];
    for ($i = 0; $i<(count($archivo)-1); $i++){
        $nombre = $nombre . $archivo[$i] . '.';
    }
    $ultimo_nombre = $nombre . time() . '-' . mt_rand(1000,9999) . '.' . $extencion;
    $url = 'imagenes/'.$ultimo_nombre;
    $imagen = $datos['imagen'] ?? '';
    $ver_tipo = explode('/', $_FILES['imagen']['type']);

    $numero_cuenta = $datos['numero_cuenta'] ?? '';
    $primer_nombre = $datos['primer_nombre'] ?? '';
    $primer_apellido = $datos['primer_apellido'] ?? '';
    $correo = $datos['correo'] ?? '';
    $dia = $datos['dia'] ?? '';
    $mes = $datos['mes'] ?? '';
    $year = $datos['year'] ?? '';

    $errores = [];
    if(empty($numero_cuenta) || mb_strlen($numero_cuenta) != 13){
        $errores[] = "El numero de cuenta debe contener 13 caracteres";
    }
    if(empty($primer_nombre) || mb_strlen($primer_nombre) > 20){
        $errores[] = "El primer Nombre no debe estar vacio y debe ser menor a 20 caracteres";
    }
    if(empty($primer_apellido) || mb_strlen($primer_apellido) > 20){
        $errores[] = "El apellido no debe estar vacio y debe ser menor a 20 caracteres";
    }
    if(empty($correo) || mb_strlen($correo) > 100){
        $errores[] = "El correo no debe estar vacio y debe ser menor a 100 caracteres";
    }
    if(empty($imagen) || $ver_tipo[0] != 'image'){
        $errores[] = "El campo imagen es Obligatorio o el archivo no es una imagen";
    }else{
        move_uploaded_file($_FILES['imagen']['tmp_name'], $url);
    }

    $fecha = $year . '-' . $mes . '-' . $dia;
    if (count($errores) === 0){
        try{
            $pdo = new PDO('mysql:dbname=matricula;host=127.0.0.1', 'root', '');
            $stmt = $pdo->prepare("INSERT INTO estudiantes (numero_cuenta, primer_nombre, apellido, fehca_nacimiento, correo, imagen) VALUES (?, ?, ?, ?, ?, ?)");

            $stmt->bindValue(1,$numero_cuenta);
            $stmt->bindValue(2,$primer_nombre);
            $stmt->bindValue(3,$primer_apellido);
            $stmt->bindValue(4,$fecha);
            $stmt->bindValue(5,$correo);
            $stmt->bindValue(6,$url);
            $stmt->execute();
            echo 'Guardado';
        }catch (PDOException $e){
            echo $e->getMessage();
    }
    }else{
        for ($i=0; $i<count($errores);$i++){
            echo $errores[$i] . '<br>';

        }
    }

}