<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!--Encabezado-->
    <header class="header">
        <div class="contenedor">
            <ul class="navegacion">
                <li class="navegacion__item"><a href="index.php">Inicio</a></li>
                <li class="navegacion__item"><a href="tablas.php">Tablas</a></li>
                <li class="navegacion__item"><a href="#">Formulario</a></li>
            </ul>
        </div>
    </header>
    <!--Contenido-->
    <main class="contenedor-general">
        <h1 class="titulo-2">Aplicando Bootstrap a una tabla</h1>
        <div class="tabla">
            <table>
                <tr>
                  <th class="p-r">Nombre</th>
                  <th>Código</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Total</th>
                </tr>
                <tr>
                  <td>BARRITAS FRESA</td>
                  <td>1</td>
                  <td>50.0</td>
                  <td>2.5</td>
                  <td>100.0</td>
                </tr>
                <tr>
                <td>BARRITAS MORAS</td>
                  <td>2</td>
                  <td>30.0</td>
                  <td>1.0</td>
                  <td>30.0  </td>
                </tr>
                <tr>
                    <td>CHECHITOS DONITAS CHILE</td>
                      <td>3</td>
                      <td>20.0</td>
                      <td>1.0</td>
                      <td>20.0  </td>
                    </tr>
              </table>
        </div>
        <div class="texto-lorem">
            <p class="texto-ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique pharetra nisi eu sagittis. Sed vel interdum sapien. Integer ut feugiat nunc. Suspendisse at magna hendrerit, efficitur nisi maximus, dapibus justo. Duis blandit molestie metus, a aliquam tortor commodo et. Duis sed augue non quam ornare blandit at posuere nibh. Vestibulum eget orci nunc. Etiam non metus vel ligula tristique luctus non nec dui</p>

            <p class="texto-ipsum">Cras congue erat et eleifend condimentum. Pellentesque id magna nec ante tempus molestie. Ut tristique, libero a lobortis congue, turpis tortor efficitur eros, quis ultricies arcu felis vitae magna. Praesent quis mollis ante. Praesent volutpat, massa sit amet accumsan tempus, lacus neque tristique risus, in feugiat sem mauris eget justo. Nullam non nisi vitae mauris interdum varius sed sed eros.</p>
        </div>
    </main>
    <!--Pie de pagina-->
    <footer class="footer">
        <h2 class="footer-titulo">Todos los derechos reservados a /UMG/</h2>
    </footer>

</body>
</html>