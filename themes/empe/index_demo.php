<?php theme_include('header'); ?>
<!-- Begin Body -->
<div class="container">
    <?php
    $todos = Ubicacion::all(array('group' => 'provincia', 'order' => 'idprovincia'));
    echo "<table border='1'>";
    foreach ($todos as $_u) {

        $custom = Ubicacion::find_by_sql("SELECT enc.ruc,enc.razonsocial,enc.direccion  FROM encuestados enc "
                        . "left join ubicacion ubi on (enc.idubicacion = ubi.idubicacion) "
                        . "where ubi.idprovincia = " . $_u->idprovincia);
        echo "<br>";
        echo "<br>";
        echo "<tr>";
        echo "<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan='3'><b>" . $_u->provincia . " (" . count($custom) . ")</b></td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>RUC</td><td>NOMBRES</td><td>DIRECCION</td>";
        echo "</tr>";
        foreach ($custom as $_c) {
            echo "<tr>";
            echo "<td>";
            echo $_c->ruc;
            echo "</td>";
            echo "<td>";
            echo $_c->razonsocial;
            echo "</td>";
            echo "<td>";
            echo $_c->direccion;
            echo "</td>";
            echo "</tr>";
        }
        //var_dump($custom);
    }
    echo "</table>";
    echo "<br>";
    echo "<br>";
    ?>
</div>
<?php include('footer.php'); ?>
<?php include('js.php'); ?>
</body>
</html>