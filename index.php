<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>基礎九九乘法表</title>
    <style>
        table, tr, td{
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>九九乘法表</h1>
<table>
<?php 
for($j=1;$j<=9;$j++){
    echo '<tr>';
    for($i=1;$i<=9;$i++){
        echo "<td> $j X $i =" . ($j*$i) . "</td>";
     }
    echo "</tr>";
}
?>
</table>
</body>
</html>