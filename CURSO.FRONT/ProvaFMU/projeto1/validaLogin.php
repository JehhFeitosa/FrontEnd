<?php

$usuario = $_POST["usuario"]; 
$senha   = $_POST["senha"]; 

if ($usuario == "admin" && $senha == "1234"){
	echo "Login realizado com sucesso!"; 
	//header('Location: index.php');
	$novo = "Administrador";
	
}
elseif ($usuario == "visit" && $senha == "12345"){
	echo "Login realizado com sucesso!"; 
	//header('Location: index.php');
	$novo = "Visitante";
	
}
elseif ($usuario == "colab" && $senha == "123456"){
	echo "Login realizado com sucesso!"; 
	//header('Location: index.php');
	$novo = "Colaborador";
	
}
else {
 	echo "ERRO: de acesso ao Sistema"; 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Seja bem vindo <?php echo $novo; ?></h1>
</body>
</html>

