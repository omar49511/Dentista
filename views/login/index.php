<!doctype html>
<html lang="en">

<head>
    <title>Consultorio dental</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">
</head>


<body>
        <nav class="nav justify-content-center|justify-content-end">
            <a class="nav-link active" href="#">Active link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" href="#">Disabled link</a>
        </nav>
    
    <div class="fondo">
        <div class="caja">
            <div class="cuadrado" style="--i:0;"></div>
            <div class="cuadrado" style="--i:1;"></div>
            <div class="cuadrado" style="--i:2;"></div>
            <div class="cuadrado" style="--i:3;"></div>
            <div class="cuadrado" style="--i:4;"></div>
            <div class="contenedor">
                <div class="formulario">
                    <h2>Iniciar sesión</h2>
                    <form action="" method="POST">
                        <div class="caja_entrada">
                            <input type="text" name="username" placeholder="Usuario">
                        </div>
                        <div class="caja_entrada">
                            <input type="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="caja_entrada">
                            <input type="submit" value="Entrar">
                            <a href=""></a> <!-- enlace al controlador-->
                        </div>
                    </form>
                    <span class="text-footer">¿Aún no te has registrado?
                        <a href="">Registrate</a>
                    </span>
                </div>
            </div>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>