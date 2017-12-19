<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>Bienvenido a iNohva</title>
            <link rel="stylesheet" href="../css/style_menu.css">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".menu-icon").click(function(){
                        $(".menu-icon").toggleClass("active")
                    })
                    $(".menu-icon").click(function(){
                        $(".sidebar").toggleClass("active")
                    })
                })
            </script>
        </head>
            <body>
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                    <div class="sidebar">
                        <a href="#"><img src="lib/img/inohvamerida.jpg"></a>
                        <ul class="menu">
                            <li><a href="#"> Inicio</a></li>
                            <li><a href="#"> ¿Quienes somos?</a></li>
                            <li><a href="#"> Departamentos</a></li>
                            <li><a href="view/users_login.php"> Iniciar Sesión</a></li>
                            <li><a href="#"> ¡Registrate!</a></li>
                        </ul>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
            </body>

</html>