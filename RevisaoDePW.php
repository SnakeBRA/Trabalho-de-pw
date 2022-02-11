<?php
    session_start();
    if(isset($_SESSION['exemplo, exemplo2'])){
        print '<p>Exemplo salvo em sessão: ' . $_SESSION['exemplo, exemplo2'] . '</p>';
    }else{?>
        <p>Não existe exemplo na sessão</p>
<?php
    }
    if(isset($_REQUEST['exemplo']))
        $exemplo = $_REQUEST['exemplo'];

    if (isset($_REQUEST['exemplo2']))
        $exemplo2 = $_REQUEST['exemplo2'];
    else
        $exemplo = 'Matheus';
        $exemplo2 = 'Enzo';
    $_SESSION['exemplo'] = $exemplo;
    $_SESSION['exemplo2'] = $exemplo2;
?>
    <p>Novo exemplo recebido pela requisição: <?php echo $exemplo?></p>
    <p>Outro novo exemplo recebido pela requisição: <?php echo $exemplo2?></p>
