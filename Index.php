<?php

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulario de Alumnos</title>
</head>
<body>
<div class="container">
    <form method="POST" action="guardar.php" enctype="multipart/form-data">
        <div class="form-row justify-content-center">
            <h1>Ingreso De Alumnos</h1>
        </div>
        <div class="form-row">
            <div class="col-lg-4">
                <div class="row"><label for="numero_cuenta">Numero de Cuenta</label></div>
                <div class="row"><input type="text" maxlength="13" name="numero_cuenta" id="numero_cuenta" autocomplete="off"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-lg-4">
                <div class="row"><label for="primer_nombre">Primer Nombre</label></div>
                <div class="row"><input type="text" maxlength="20" name="primer_nombre" id="primer_nombre" autocomplete="off"></div>
            </div>
            <div class="col-lg-4">
                <div class="row"><label for="primer_apellido">Primer Apellido</label></div>
                <div class="row"><input type="text" maxlength="20" name="primer_apellido" id="primer_apellido" autocomplete="off"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-lg-5">
                <div class="row"><label for="correo">Correo Electronico</label></div>
                <div class="row"><input type="email" maxlength="100" name="correo" id="correo" autocomplete="off"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-lg-6">
                <div class="row"><label for="">Fecha de Nacimiento</label></div>
                <div class="row">
                    <div class="col-lg-4">
                        <select name="dia" id="dia" autocomplete="off">
                            <option value="dia">Dia</option>
                            <?php for ($i=1; $i <= 31; $i++):?>
                                <option value="<?php echo $i?>"><?php echo $i?></option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <select name="mes" id="mes" autocomplete="off">
                            <option value="mes">Mes</option>
                            <?php for ($i=1; $i <= 12; $i++):?>
                                <option value="<?php echo $i?>"><?php echo $i?></option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <select name="year" id="year" autocomplete="off">
                            <option value="year">Año</option>
                            <?php for ($i=1960; $i <= 2000; $i++):?>
                                <option value="<?php echo $i?>"><?php echo $i?></option>
                            <?php endfor;?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="input-group col-lg-3">
                <label for="">Foto de Perfil</label>
            </div>
            <div class="col-lg-5">
                <input type="file" name="imagen" id="imagen" accept="image/*">
            </div>
        </div>
        <hr>
        <div class="form-row justify-content-center">
            <input type="submit" value="Enviar Datos" class="btn btn-primary">
        </div>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>