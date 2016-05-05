<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login HELPBOOK</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
	
	<?php
		//header("Location:home.php");
		
		if (isset($_POST['nome']) && isset($_POST['password'])) 
		{
                        $tnome = filter_var($_POST['nome'], FILTER_SANITIZE_URL);
                        $tpw = filter_var($_POST['password'], FILTER_SANITIZE_URL);
                        
                        //Controllo le password
			require('database.php');
			
			$sql = "SELECT idutente, utentenome, utentepw, utentemail, utenti.idutentitipologia AS tipo, utentitipologia.idutentitipologia AS mansioneID, utentitipologia.descrizione AS mansione FROM utenti, utentitipologia WHERE utentenome='".$tnome."' AND utenti.idutentitipologia=utentitipologia.idutentitipologia";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) {
					$idutente=$row['idutente'];
					$nome=$row['utentenome'];
					$email=$row['utentemail'];
					$mansione=$row['mansione'];
					$password=$row['utentepw'];
				}
			}
			
			$conn->close();
			
			if($tpw==$password)
			{
				session_start();
				if (!isset($_SESSION['idutente'])) 
				{
					$_SESSION['idutente'] = $idutente;
					$_SESSION['nome'] = $nome;
					$_SESSION['email'] = $email;
					$_SESSION['mansione'] = $mansione;
				}
				header("Location:home.php");	
			}
			else
				echo '<div class="alert alert-success" role="alert"> <strong>ATTENZIONE!</strong> Password errata</div>';
			
		} 
	?>
	
      <form class="form-signin" action="index.php" method="POST">
        <h2 class="form-signin-heading">Helpbook</h2>
		<h3 class="form-signin-heading">Login</h3>
        <label for="inputNome" class="sr-only">Nome utente</label>
        <input type="nome" id="inputNome" class="form-control" placeholder="Nome utente" name="nome" maxlength="16" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" maxlength="8" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entra</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
