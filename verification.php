
<?php
   

      session_start();
    
   
if(isset($_POST['username']) && isset($_POST['password']))
{
include'connexion.php';

	
    $username = $_POST['username']; 
    $password = $_POST['password'];
	
    
    
    if($username !== "" &&  $password !== "")
    {
        $requete = "SELECT count(*) FROM users where 
			username = '".$username."' AND password = '".$password."' ";
        $exec_requete = mysqli_query($connexion,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
	
			
           header('Location: accueil.php');
			
			{
  				die("ERREUR !!!");
			}

        }
        else
        {
           header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
}
mysqli_close($connexion); // fermer la connexion
?>