<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<?php
echo '<pre>' . print_r($_GET, true) . '</pre>';
echo '<br>';
echo '<pre>' . print_r($_POST, true) . '</pre>';

echo '<br>' . count($_POST);
