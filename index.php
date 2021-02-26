<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table align="center">
            <tr>
                <td><h2>Ocultar los botones del navegador al abrir pdf</h2></td>
            </tr>
            <tr>
                <td><a href="javascript:popup('pdf.php',1200,700)">Mostrar pdf</a></td>
            </tr>
        </table>
        <script>
            function popup(url, ancho, alto) {
                var posicion_x;
                var posicion_y;
                posicion_x = (screen.width / 2) - (ancho / 2);
                posicion_y = (screen.height / 2) - (alto / 2);
                window.open(url, "documento", "width=" + ancho + ",height=" + alto + ",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left=" + posicion_x + ",top=" + posicion_y + "");
            }
        </script>
    </body>
</html>
