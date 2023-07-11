<!doctype html>

<html lang="fr">


<head>

    <!-- Basic -->
    <meta charset="utf-8">
  

    <!-- Site Meta -->
    <title>Projet cps 2</title>

    <meta name="keywords" content="webwags gabriel sene 774000424">
    <meta name="description" content="Gestion cantine scolaire cours sacré coeur dakar senegal">
    <meta name="author" content="Gabriel SENE 77 400 04 24">

 
   
</head>

<body>

    

 
                
					
                    <center><h1 style="color:blue">CONNEXION</h1></center>
			
                    
                        
                            <form action="verification.php" method="POST">
								<br/><br/>
								<table align="center">
									<tr width="100%">
									<td>
                                
                                <input type="text"  placeholder="Identifiant" name="username" style="color:red" required default selected>
									</td>
									</tr>
									<tr width="100%">
									<td>
                                
                                <input type="password" placeholder="Mot de passe" name="password" style="color:red" required><br/>
									</td>
									</tr>
									<tr width="100%">
									<td>
                                <input type="submit" id='submit' value='CONNEXION'>
								</td>
									</tr>
								</table>
                                <?php
                                if (isset($_GET['erreur'])) {
                                    $err = $_GET['erreur'];
                                    if ($err == 1 || $err == 2)
                                        echo "<center><h2>Utilisateur ou mot de passe incorrect</h2></center>";
                                    if ($err == 3)
                                        echo "<center>Vous devez être connecté</center>";
                                }
                                ?>

                            </form>
                       
                    
                
         

</body>

</html>