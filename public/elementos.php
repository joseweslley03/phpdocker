<form method="GET">
    <input type="checkbox" name = "sabores[]" id="mussarela" value="Mussarela">
    <label for="mussarela"> Mussarela </label>

    <input type="checkbox" name = "sabores[]" id="calabresa" value="Calabresa">
    <label for="calabresa"> Calabresa </label>

    <input type="checkbox" name = "sabores[]" id="portuguesa" value="Portuguesa">
    <label for="portuguesa"> Portuguesa </label>

    <button type="submit">Enviar</button>
</form>

<?php 
    $sabores = $_GET ['sabores'];
    if ($sabores) {
        foreach ($sabores as $sabor_escolhido) {
        echo "Você escolheu o sabor $sabor_escolhido";
        }
    }
    ?>