
<html>
    <head>
        <meta charset="UTF-8">
        <title>Area de un triangulo</title>
    </head>
    <style>
        form{
            background-color: black;
            margin: auto;
            width: 300px;
            text-align: center;
            color: aqua;
        }
    </style>
    <body>
        <?php
        if (!isset($_POST["datos"])) {
            ?>  

            <form method="post"action="triangulo.php"> 
                <input type="hidden" name="datos" value="12345">
                <table style="width: 300px;text-align: center; border-color: aqua ;padding: 5px;color: aqua">
                    <tr>
                        <td>Triangulo</td>
                    </tr>  
                    <tr>
                        <td>Area</td>
                    </tr>
                </table>
                <table style="width: 300px;text-align: center; border-color: aqua ;padding: 5px;color: aqua">
                    <tr>
                        <td>BASE</td>
                        <td><input type="text" name="base"></td>

                    </tr> 
                    <tr>
                        <td>ALTURA</td>
                        <td><input type="text" name="altura"></td>   
                    </tr> 
                </table>
                <table style="width: 300px;text-align: center; border-color: aqua ;padding: 5px;color: aqua">
                    <tr>
                        <td>PERIMETRO</td>   
                    </tr> 
                </table>
                <table style="width: 300px;text-align: center; border-color: aqua ;padding: 5px;color: aqua">
                    <tr>
                        <td>LADO_1</td>
                        <td><input type="text" name="lado1"></td>

                    </tr> 
                    <tr>
                        <td>LADO_2</td>
                        <td><input type="text" name="lado2"></td>   
                    </tr> 
                    <tr>
                        <td>LADO_3</td>
                        <td><input type="text" name="lado3"></td>   
                    </tr> 
                </table>
                <input style="color: black ; background-color:aqua" type="submit" value="calcular"> 
            </form>
            <?php
        } else {
            $base = $_POST["base"];
            $altura = $_POST["altura"];
            $lado_1 = $_POST["lado1"];
            $lado_2 = $_POST["lado2"];
            $lado_3 = $_POST["lado3"];
            $area = ($base * $altura) / 2;
            $perimetro = ($lado_1 + $lado_2 + $lado_3);
            ?>
            <form>
               <table style="width: 300px;text-align: center;padding: 5px;color: aqua">
                    <tr>
                        <td>resultado del area</td>  
                    </tr>   
                </table >
                <table style="width: 300px;padding: 5px;color: aqua">
                    <tr>
                        <td>base</td>  
                        <td><?php echo $base ?></td>  
                    </tr>   
                    <tr>
                        <td>altura</td>  
                        <td><?php echo $altura ?></td>  
                    </tr> 
                    <tr>
                        <td>area</td>  
                        <td><?php echo $area ?></td>  
                    </tr>  
                </table>
                <table style="width: 300px;text-align: center;padding: 5px;color: aqua">
                    <tr>
                        <td>resultado del Perimetro</td>  
                    </tr>   
                </table>
                <table style="width: 300px;padding: 5px;color: aqua">
                    <tr>
                        <td>lado_1</td>  
                        <td><?php echo $lado_1 ?></td>  
                    </tr>   
                    <tr>
                        <td>lado_2</td>  
                        <td><?php echo $lado_2 ?></td>  
                    </tr> 
                    <tr>
                        <td>lado_3</td>  
                        <td><?php echo $lado_3 ?></td>  
                    </tr>  
                    <tr>
                        <td>Perimetro</td>  
                        <td><?php echo $perimetro ?></td>  
                    </tr>  
                </table>
                <table style="width: 300px;text-align: right">
                    <tr>
                        <td><a href='triangulo.php'>Nuevo Calculo</a></td>  
                    </tr>   
                </table> 
            </form>

            <?php
        }
        ?>

    </body>

</html>