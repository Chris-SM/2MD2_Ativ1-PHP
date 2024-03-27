<?php
$Nome = $_GET['Nome'];
$Pro1 = $_GET['n1'];
$Val1 = $_GET['v1'];
$Pro2 = $_GET['n2'];
$Val2 = $_GET['v2'];
$ValT = $Val1 + $Val2;
$ValP = $_GET['Pago'];
$Troco = $ValP - $ValT;
echo "<center>";
echo "<h2>Cliente: $Nome</h2>";
echo "<h4>Comprou: </h4>";
echo "<table border='1cm'>";
echo "<th>Nomes</th><th>Valor</th>";
echo "<tr><td>$Pro1</td><td>$Val1</td></tr>";
echo "<tr><td>$Pro2</td><td>$Val2</td></tr>";
echo "<tr style='background-color: rgba(197, 197, 197,1);'><td style='color: transparent;'>|</td><td></td></tr>";
echo "<tr><td>Valor Total</td><td>$ValT</td></tr>";
echo "<tr><td>Valor Pago</td><td>$ValP</td></tr>";
echo "<tr><td>Valor do Troco</td><td>$Troco</td></tr>";
echo "</table>";
echo "</center>";

?>