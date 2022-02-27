<style>
    table {
        border: 1px solid #444444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444444;
    }

    table td {
        padding: 10px 20px;
    }
</style>
<div class="titulo">Desafio Tabela #01</div>

<?php

$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];

foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        echo "$valor ";
    }
    echo '<br>';
}
?>

<table>
    <tbody>
        <?php
        foreach ($matriz as $linha) {
        ?>
            <tr>
                <?php
                foreach ($linha as $valor) {
                ?>
                    <td>
                        <?= $valor; ?>
                    </td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<hr>

<table>
    <tbody>
        <?php
        foreach ($matriz as $index => $linha) {
            $style = $index % 2 === 1 ? 'background-color: lightblue' : '';
        ?>
            <tr style="<?= $style; ?>">
                <?php
                foreach ($linha as $valor) {
                ?>
                    <td>
                        <?= $valor; ?>
                    </td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
