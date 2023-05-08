<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href= "listar.css">
        <title> Quitanda </title>
</head>
<body class= "listar">
    <h1>Quitanda </h1>

    <?php
    $stmt = $pdo->query ('SELECT * FROM produto');
    $stmt->execute();
    $quitandas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count ($quitandas) == 0) {
        echo '<p> Nenhuma fruta escolhida. </p>';
    } else {
        echo '<table border="1">';
        echo '<thead><tr><th>Nome</th><th>Tamanho</th><th>Peso</th><th>Quantidade</th><th>Preço</th><th colspan="2">Opções</th></tr></thead>';
        echo '<tbody>';

        foreach ($quitandas as $quitanda) {
            echo '<tr>';
            echo '<td>' . $quitanda['Nome'] . '</td>';
            echo '<td>' . $quitanda['Tamanho'] . '</td>';
            echo '<td>' . $quitanda['Peso'] . '</td>';
            echo '<td>' . $quitanda['Quantidade'] . '</td>';
            echo '<td>' . $quitanda['Preco'] . '</td>';
            echo '<td><a style="color:black;" href="atualizar.php?id=' . $quitanda ['ID'] . '">Atualizar </a></td>';
            echo '<td><a style="color:black;" href="deletar.php?id=' . $quitanda ['ID'] . '">Deletar</a></td>';
            echo '<try>';
        }
        echo '</tbody>';
        echo '</table>';
    }

    ?>
    </body>

    </html>
