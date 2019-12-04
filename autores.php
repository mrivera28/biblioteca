<?php
include_once 'libreria_mysql.php';
try {
    bd_connectar();
} catch (Exception $e) {
    die($e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Biblioteca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link href="jq/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontello.css" rel="stylesheet" type="text/css"/>
        <link href="css/fixed.css" rel="stylesheet" type="text/css"/>
        <link href="css/img.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="css/redes.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontello.css" rel="stylesheet" type="text/css"/>
        <link href="css/table.css" rel="stylesheet" type="text/css"/>
        <link href="css/test.css" rel="stylesheet" type="text/css"/>
        <!--JS-->
        <script src="jq/jquery-3.4.0.min.js" type="text/javascript"></script>
        <script src="jq/jquery-ui.min.js" type="text/javascript"></script>  
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/table.js" type="text/javascript"></script>
    </head>
    <body>
        <header class="row">
            <div class="logotipo">
                <div class="row">
                    <div class="col-3 col-6 logo">
                        <img src="image/logo.jpeg"  alt="logo"/>
                    </div>
                    <div class="col-6 col-m-6 col-s-12 nombre">
                        <h3>UNIDAD EDUCATIVA ISAAC NEWTON</h3>
                    </div>
                </div>
            </div>
            <div class="navegacion">
                <div class="boton-menu">
                    <a><span class="icon icon-menu"></span></a>
                </div>
                <nav class="m">
                    <ul  class="menu">
                        <li><a href="index.html">Inicio</a></li>
                  
                        <li><a>Catálogo</a>
                            <ul class="submenu">
                                <li><a href="autores.php">Autores</a></li>
                                <li><a href="libros.php">Libros</a></li>
                            </ul>
                        </li>
                  
                        <li><a>Contacto</a>
                            <ul class="submenu">
                                <li><a href="login.html">Iniciar sesión</a></li>
                                <li><a href="register.html">Registrarse</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="row">
            <div class="col-12 tail"><br/><br/>
                <article>
                    <h3 style="color: #F2EABC; text-align: center;">Registro de Autores</h3><br/>
                    <table border="1" style="border-collapse: collapse; width: 100%;">
                        <thead>

                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                      

                        </thead>
                        <tbody>
                            <?php
                            $registros = bd_consultar("SELECT * FROM autores");
                            if (!$registros) {
                                ?>
                                <tr> 
                                    <td colspan="6"><?= "No hay registros" ?></td>
                                </tr> 
                                <?php
                            } else {
                                foreach ($registros as $autor) {
                                    ?>
                                    <tr> 

                                        <td><?= $autor['nombre'] ?></td>
                                        <td><?= $autor['paterno'] ?></td>
                                        <td><?= $autor['materno'] ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            bd_desconectar()
                            ?>
                        </tbody>
                    </table><br/><br/>
                </article>
            </div>
        </div>
        <footer><br/>
              <div class="social-bar">  
                <a class="icono icon-facebook-squared" href="#" target="_blank"></a>
                <a class="icono icon-twitter" href="#" target="_blank"></a>
                <a class="icono icon-youtube-play" href="#" target="_blank"></a>
                <a class="icono icon-instagram" href="#"  target="_blank"></a>
            </div>
            <div class="row">
                <div class="col-12 col-m-12 col-s-12 map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.4905571126237!2d-76.98591064967786!3d-11.940499891496607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105db276929640f%3A0x45603bb2d174e924!2sColegio%20%22Isaac%20Newton%22!5e0!3m2!1ses!2spe!4v1575253418100!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </footer>
    </body>
</html>


