<?php

$linhas = filter_input(INPUT_POST, 'linhas', FILTER_VALIDATE_INT);
$colunas = filter_input(INPUT_POST, 'colunas', FILTER_VALIDATE_INT);
?>
<style>
    form>* {
        font-size: 1.8rem;
    }

    form>div {
        margin-bottom: 10px;
    }

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
<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="post">
    <label for="linhas">Linhas: </label>
    <input id="linhas" name="linhas" type="number" value="<?= $linhas ?? 10; ?>"><br>
    <label for="colunas">Colunas: </label>
    <input id="colunas" name="colunas" type="number" value="<?= $colunas ?? 10; ?>"><br>
    <button>Enviar</button>
</form>

<?php
if (!empty($linhas) && !empty($colunas)) : ?>
    <table>
        <?php
        $aux = 1;
        for ($i = 0; $i < $linhas; $i++) :
        ?>
            <tr>
                <?php for ($j = 1; $j <= $colunas; $j++) : ?>
                    <td>
                        <?= $aux++; ?>
                    </td>
                <?php endfor; ?>
            </tr>
    <?php
        endfor;
    endif;

    ?>
    </table>
