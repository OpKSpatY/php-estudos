<?php 
    try{
        echo '--- Código TRY ---';
        echo '<br>';
        $SQL_QUERY = 'SELECT * FROM Clientes';
        mysqli_query($SQL_QUERY);
    }
    catch(Error $E){
        echo '--- Código Catch ---';
        echo '<p style="color: red">' . $E . '</p>';
        echo '<br>';
    }
    finally{
        echo '--- Código Finally ---';
    }
?>