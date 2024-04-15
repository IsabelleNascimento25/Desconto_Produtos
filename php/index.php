
<!-- a) Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, 
exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.
b) Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%.
c) Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor,
 divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra. -->
  
<form method="" action="">
    <h1>Valor do produto</h1>
    <br>
        <input name="num" type="number">
    <br>
    <h1>Qual o desconto em porcentagem?</h1>
        <input name="porcentagem" type="number">
        <form action="">
   <h1> Parcelar esse produto em quantas vezes? </h1>
   <p>Lembrando que tera um juros de 16% por parcelar em vezes</p>
   <br>
    <input type="number" name="parcela">
        <button type="submit"> Enter </button>
    </form>
    
<?php
if (isset($_GET['num']) && isset($_GET['porcentagem']) && (isset($_GET['parcela']))) {
    $num = $_GET['num'];
    $porcentagem = $_GET['porcentagem'];
    $parcela = $_GET['parcela'];
    //is_numeric é uma função do PHP que verifica se uma variável é um número ou uma string numérica,
    // retornando true se for o caso e false caso contrário.
    // É útil para validar entradas de usuário antes de fazer cálculos.

    if (is_numeric($num) && is_numeric($porcentagem)) {
        $resultado = ($num * $porcentagem) / 100;

    if (is_numeric($parcela)) {
            $valor_parcela = $resultado / $parcela;
        
       
            echo "<p>Com  $porcentagem% de desconto o preço diminuira para : R$ " . number_format($resultado, 2) . 
            "</p><p> Parcelando em $parcela vezes você terá que pagar:  R$ " . number_format($valor_parcela, 2) . "</p>";
    } else {
        echo "<p>Por favor, forneça números válidos.</p>";
    }
} else {
    echo "<p>Por favor, forneça o número, a porcentagem e o número de parcelas.</p>";
}
}
?>
