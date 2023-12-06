<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border: 1px solid black ;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr><th colspan="20">جدول ضرب</th></tr>
        <?php
        for($i=1;$i<=10;$i++){
            echo "<tr>";
            for($i2=1;$i2<=10;$i2++){
                echo "<td>".$i*$i2."</td>";
            }
        echo "</tr>";
        }
?>
    </table>
</body>
</html>