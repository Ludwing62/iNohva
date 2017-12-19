<?php include '../../../lib/navbar/user_nav.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administradr Empleados</title>
        <link rel="stylesheet" type="text/css" href="../../../lib/css/users_table.css">
        <script type="text/javascript">
            (function(document) {
                'use strict';

                var LightTableFilter = (function(Arr) {

                    var _input;

                    function _onInputEvent(e) {
                        _input = e.target;
                        var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                        Arr.forEach.call(tables, function(table) {
                            Arr.forEach.call(table.tBodies, function(tbody) {
                                Arr.forEach.call(tbody.rows, _filter);
                            });
                        });
                    }
                    function _filter(row) {
                        var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                        row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                    }
                    return {
                        init: function() {
                            var inputs = document.getElementsByClassName('light-table-filter');
                            Arr.forEach.call(inputs, function(input) {
                                input.oninput = _onInputEvent;
                            });
                        }
                    };
                })(Array.prototype);
                document.addEventListener('readystatechange', function() {
                    if (document.readyState === 'complete') {
                        LightTableFilter.init();
                    }
                });
            })(document);
        </script>
        <script>
            $(function(){
                $('#keywords').tablesorter();
            });
        </script>
    </head>
                    <center>
                        <div class="derecha" id="buscar"><input type="search" class="light-table-filter" data-table="order-table" placeholder="Ingrese su busqueda" align="center"></div>
                    </center>
                <div id="wrapper">
                    <table id="keywords" class="features-table order-table">
                        <?php
                        include '../../../controller/connection.php';
                            $link = Conectarse();
                            $result= mysqli_query($link,"Select * from users WHERE type_user = 3");
                            while ($row=mysqli_fetch_row($result)) {
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[2]</td>";
                                echo "<td>$row[3]</td>";
                                echo "<td>$row[4]</td>";
                                echo "<td>";
                                echo "</tr>";
                            }
                        ?>
                        <thead>
                        <tr>
                            <th><span>Nombre</span></th>
                            <th><span>Apellido</span></th>
                            <th><span>Email</span></th>
                            <th><span>Usuario</span></th>
                            <th><span>Acciones</span></th>
                        </tr>
                        </thead>
                    </table>
                </div>
        </body>
</html>
