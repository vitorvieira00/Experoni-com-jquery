<html>

<head>

</head>
    <body>
    <ul>
<?php

require_once "../app/model/CategoriaCrud.php";

$crud = new CategoriaCrud();
$categorias  = $crud -> getCategorias();

foreach ($categorias as $categoria){
    echo "<li>".utf8_encode($categoria->getNome())."</li>";
}

?>
    </ul>



</body>

</html>
