<?php
if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
}else{
  	$acao = 'index';
}

require "../model/CategoriaCrud.php";

switch ($acao){
	case 'index':
		 $crud = new CategoriaCrud();
		 $categorias = $crud->getCategorias();

		 //echo 'Vai fazer o index - getCategorias() e exibir os dados usando a view /views/categorias/index.php';
		 include '../views/templates/cabecalho.php';
         include '../views/categorias/index.php';
         include '../views/templates/rodape.php';
		break;

	case 'show':
		//echo 'Vai exibir o show.php - getCategoria(id) e exibir os dados em /views/categorias/show.php';
		 $id = $_GET['id'];
		 $crud= new CategoriaCrud();
		 $categoria = $crud->getCategoria($id);

		 //echo 'Vai fazer o index - getCategorias() e exibir os dados usando a view /views/categorias/index.php';
		 include '../views/templates/cabecalho.php';
         include '../views/categorias/show.php';
         include '../views/templates/rodape.php';
		break;	

	default:
		
		echo 'Ação não existente';
}