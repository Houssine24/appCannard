<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <title>Duck localization</title> 
</head>

<body>
 <nav class="navbar">
  <a class="navbar-brand" href="index.php">
    <img src="duck.png" width="100" height="100" class="d-inline-block align-top" alt="">
  </a>
</nav>
<h1>Localisation de Canards !</h1>

<div id="formulaire">
  <form method="POST" ACTION="">
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Lieu :*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lieu">
    </div>
    <div class="element"> 
      <label>Date :*</label>
      <input type="text" name="date">
    </div>
    <div class="element">
      <label>Nombres :*</label>
      <input type="text" name="nombre">
    </div>
    <div class="element">
      <button  class="btn btn-success" name="submit" type="submit" value="Envoyer">Envoyer</button>
    </div>
  </form>
</div>
<h3>Canards trouvés dans le Gers :</h3>
</body>
</html>
<?php
// Connexion à la base de données
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=canard_bdd;charset=utf8', 'simoccauch30', 'mamanjetaime4812');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
// On récupère et on affiche le contenu de la Base de données.
?>
<table class="affichage">
  <tr>
    <th>Lieu</th>
    <th>Date</th>
    <th>Nombres</th>
  </tr>
  <?php $req = $bdd->query('SELECT * FROM canard');

  while ($donnees = $req->fetch())
    { echo
      '<tr><td>'.$donnees['lieu'].'</td>'.
      '<td>'.$donnees['date'].'</td>'.
      '<td>'.$donnees['nombre'].'</td></tr>';
    }
    ?>    
  </table>
  <?php
 // Fin de la boucle des Articles
  $req->closeCursor();
  ?> 
  <?php
//Message d'erreur si input vide.
  if(!empty($_POST['submit'])){
    if (!empty($_POST['lieu']) && !empty($_POST['date']) && !empty($_POST['nombre'])){
      try {
            //Pour éviter les erreur.
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            // Connexion à la base de données.
        $bdd = new PDO('mysql:host=localhost;dbname=canard_bdd;charset=utf8', 'simoccauch30','mamanjetaime4812', $pdo_options);
            //Ajout du nouvel article dans la base de donnée.
        $req = $bdd->prepare('INSERT INTO canard(lieu, date, nombre)
          VALUES(:lieu, :date, :nombre)');
        $req->execute(array(
          ':lieu' => $_POST['lieu'],
          ':date' => $_POST['date'],
          ':nombre' => $_POST['nombre']
        ));
        header('Location: index.php');
      }
      catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
      }
    }else{
      //Message d'erreur si input vide.
      echo  "<script>alert( 'Aucune saisie enregistré');</script>"; 
    }
  }
  ?>
  <footer class="page-footer">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="index.php"> DuckLocalization.com</a>
    </div> 
  </footer>  