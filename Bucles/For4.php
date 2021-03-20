<!DOCTYPE html>
<html>
<body>
    <table border="1">
        <tr>
            <?php
                $numero=rand(1, 10);
                for ($i=0; $i <=10; $i++) {    
                echo "<tr>";
                echo "<td> $numero </td>";
                echo "<td> * </td>";
                echo "<td> $i </td>";
                echo "<td> = </td>";
                echo "<td>".$numero*$i."</td>";
                echo "</tr>"; }   
            ?>
        </tr>
    </table>
</body>
</html>