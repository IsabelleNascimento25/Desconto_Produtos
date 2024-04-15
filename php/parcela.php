

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculo de Salário</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="index.css" media='screen' href='main.css'>
    
</head>
<body> 
<form action="">
   <h1> Parcelar esse produto em quantas vezes? </h1>
<br>
    <input type="number" name="parcela">
    <button type="submit"> Enter </button>
</form>
<?php
if(isset($_GET['parcela'])) {
    $parcela = $_GET['parcela'];

    if (is_numeric($parcela)) {
    $valor_parcela = $resultado / $parcela;
    echo "<p>O seu desconto será de: R$ " . number_format($valor_parcela, 2) . "</p>";

} else {
     echo "<p>Por favor, forneça números válidos.</p>";
}
}

?>

</body>
</html>