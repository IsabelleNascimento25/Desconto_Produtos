<?php
if (isset($_POST['opcao'])) {
    $opcao = $_POST['opcao'];
    
    if ($opcao == 'sim') {
        header('Location: _sim.php');
        exit();
    } elseif ($opcao == 'nao') {
        header('Location: index2_nao.php');
        exit();
    }
}
?>