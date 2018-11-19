<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>Drogueria</title>
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h2>Drogueria Santa Cecilia</h2>
            <a href="http://www.script-tutorials.com/pure-css3-lavalamp-menu/" class="stuts">Software de facturación <span>Script Tutorials</span></a>
        </header>
       <div class="container">

            <ul id="nav">
                <li><a href="{{ url('/home') }}">Principal</a></li>
                <li><a class="hsubs" href="#">Clientes</a>
                    <ul class="subs">
                        <li><a href="#">Cliente Preferencial</a></li>
                        <li><a href="#">Cliente VIP</a></li>
                        <li><a href="#">Cliente regular</a></li>
                        <li><a href="#">Cliente Moroso</a></li>
                        <li><a href="#">Otro</a></li>
                    </ul>
                </li>
             
                <li><a href="http://www.script-tutorials.com/pure-css3-lavalamp-menu/">Back</a></li>
                <div id="lavalamp"></div>
            </ul>
            <br><p>
                <br>
               
            @yield('cuerpo')
          <p><br>
 <footer><center>Copyrigh Lesny Mosquera Renteria @2017 - Todos los derechos Reservados</center></footer>
        </div>
    </body>
</html>
