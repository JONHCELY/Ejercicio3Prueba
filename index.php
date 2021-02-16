<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilos.css"> 
    </head>
</html>
<?php    
    $matriz = array(
        array(25,2,12),
        array(3,10,21),
        array(1,8,9)
    );
    $array2 = 2;
    mostrar($matriz, $array2);
    sumar($matriz, $array2);   
    
    function mostrar($matriz, $array2){
        ?>
        <table width="900" align="center" class="encabezado" >
            <tr align="center">                
                <td><h3>Tabla de datos</h3></td>
            </tr>
        </table>
        <table width="900" align="center">              
        <?php          
        for($i=0 ; $i<=$array2 ; $i++){            
            ?>
            <tr>
                <?php
                for($j = 0; $j<=$array2 ; $j++){
                ?>                  
                    <td align="center">
                        <?php echo($matriz[$i][$j]); ?>
                    </td>                                                        
                <?php                
                }
                ?>
            </tr>
            <?php
        }    
        ?>    
        </table>        
        <?php
    }   

    function sumar($matriz, $array2){      
        $suma=0; 
        $suma2=0;    
        $valorAbsoluto=0;

        for($i=0 ; $i<=$array2 ; $i++){
            for($j = 0; $j<=$array2 ; $j++){
                if($i == $j){
                    $suma = $suma + $matriz[$i][$j];
                }               
            }
        }
        ?><br>
        <table width="900" align="center">
            <tr align="center">
                <td><h3><?php echo("La suma principal es: ". $suma); ?> </h3></td>
            </tr>
        </table>        
        <?php
        $array2=3;
        for($i = 0; $i<=$array2 ; $i++){
            for($j = 0; $j<=$array2 ; $j++){
                if($j + $i == $array2 - 1){
                    $suma2 = $suma2 + $matriz[$j][$i];
                }               
            }
        }
        $valorAbsoluto = $suma2 - $suma;
        if($valorAbsoluto<0){
            $valorAbsoluto = $valorAbsoluto*-1;
        }        
        ?><br>
        <table width="900" align="center">
            <tr align="center">
                <td><h3> <?php echo("La suma secundaria es: ". $suma2); ?></h3></td>
            </tr>
        </table>        <br>
        <table width="900" align="center">
            <tr align="center">
                <td><h3> <?php echo("El valor Absoluto es: ". $valorAbsoluto); ?></h3></td>
            </tr>
        </table> 
        <?php        
    }             
        
?>
