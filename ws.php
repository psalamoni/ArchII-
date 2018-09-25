<?php
require_once("config.php");

$sql = "SELECT id, name, record, datah FROM archII_table";
$result = $conn->query($sql);
$conn->close();
?> 
<html>
<head>
    <title>Resultados</title>
</head>
<body>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($result->num_rows > 0) {
        // inicia o loop que vai mostrar todos os dados
        while($linha = $result->fetch_assoc()) {
?>
            <p> teste <?=$linha['id']?> / <?=$linha['name']?> / <?=$linha['record']?> / <?=$linha['datah']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        };
    // fim do if 
    }
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>
