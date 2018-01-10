<!html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Você está Logado</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
   
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
   
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID'])) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: login.php"); exit;
  }
   
  ?>
<body>
  <h1>P&aacutegina restrita</h1>
  <p>Ol&aacute, <?php echo $_SESSION['UsuarioNome']; ?>!</p>
    <?php
      
      if ($_SESSION['UsuarioID'] == '2'){
        echo "<a href = 'admin.php'>Clique para acessar Sua página</a>";
      }
     date_default_timezone_set('America/Sao_Paulo');
            $date = date('d-m-Y H:i');
            $apostador = $_SESSION['UsuarioNome'];
            echo "Veja aqui a data e hora do nosso servidor: $date";
            echo "<a href = 'logout.php'>Clique aqui para Sair</a><br>";
            echo "<fieldset><legend>Escolha seu N&uacutemero:</legend><form name='frm_numero' method='GET' action='guardar.php'><label for='data'>Data e Hora:</label><br/><input type='text' name='txtData' id='data_hora' size='12' value = '$date' readonly='readonly'/><br/><label for='apostador'>Apostador:</label><br/><input type='text' name='txtApostador' id='apostador' size='12' value = '$apostador' readonly='readonly'/><br/><label for='telefone'>Telefone:</label><br/><input type='text' name='txtTelefoe' id='telefone' size='10'/><br/><label for='numero'>N&uacutemero:</label><br/><input type='text' name='txtNumero' id='numero' size='10'/>
            <br/><input type='submit' value='Cadastrar'><input type='reset' value='Limpar'></form></fieldset>";
     ?>
     
</body>
</html>