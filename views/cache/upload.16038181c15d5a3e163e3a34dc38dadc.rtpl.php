<?php if(!class_exists('Rain\Tpl')){exit;}?><html>
<head>
<title>upload HTML</title>
</head>
<body>
<h1>Tela Upload HTML</h1>

<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Enviar</button>
</form>

&lt;?php
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
	$file = $_FILES["fileUpload"];
	if ($file["error"]){
		throw new Exception("Error: ".$file["error"]);
	}
	$dirUploads = "uploads";
	if (!is_dir($dirUploads)){
		mkdir($dirUploads);
	}
	if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file ["name"])){
		echo "Upload realizado com sucesso!";
	}else {
		throw new Exception("Não foi possivel fazer o upload  ");
	}
}
?&gt;


</body>
</html>