<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2> Listagem de Categorias </h2>

      <table>
      <tr>
      	<th>       #           </th>
      	<th> Nome da Categoria </th>
      </tr>
     <tbody>
  
  <?php foreach ($categorias as $categoria) : ?>
  	
   <tr>
    <td><?= $categoria->getId()   ?> </td>
    <td><?= $categoria->getNome() ?> </td>
   </tr>

  <?php endforeach; ?>

  
     </tbody>
  </table>
</body>
</html>