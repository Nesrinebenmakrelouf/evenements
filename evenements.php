<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
  </head>
  <body>
  <section id="header">
      <img src="logo.png" height="70px" width="140px" id="logo">
        <div>
            <ul id="navbar">
                <li><a class="active" href="acceuil.php">Accueil</a></li>
                <li><a  href="Apropos.php">À propos</a></li>
                <li><a href="membres.php">Membres</a></li>
                <li class="dropdown">
                  <a href="publication.php" class="dropdown-toggle" id="publications-dropdown">Publications</a>
                  <ul class="dropdown-menu" aria-labelledby="publications-dropdown">
                      <li><a href="comunication.php">Publication et Communication</a></li>
                      <li><a href="soutnance.php">Theses et mémoires</a></li>
                      <li><a href="evenement.php">Evenements Scientifiques</a></li>
                  </ul> 
              </li>
              <li class="dropdown">
                  <a href="projet.php" class="dropdown-toggle" id="projets-dropdown">Projets</a>
                  <ul class="dropdown-menu" aria-labelledby="projets-dropdown">
                      <li><a href="projet.php">Nationaux</a></li>
                      <li><a href="projet.php">Internationaux</a></li>
                  </ul>  
              </li>
              
                <li><a href="contact.php">Contact</a></li>
                
            </ul>
        </div>
    </section>
    <section class="recharche3">
        <h1 >Recherche / Evenements :</h1>
        <h3>Le LRDSI est impliqué dans de nombreux Evenements de recherche sur le plan national et international. </h3>
        <img src="icons8-double-down-50.png" alt="">
      </section>
      
    <?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lrdsi";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}


$sql = "SELECT * FROM document ORDER BY CASE WHEN type = 'internationale' THEN 1 WHEN type = 'communication' THEN 2 ELSE 3 END";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo  $row["tittre"];
        echo "<p>Auteurs: " . $row["auteurs"] . "</p>";
        echo "<p>Journal: " . $row["nom du journale"] . "</p>";
        echo "<p>Date:". $row["date"] . "</p>";
        echo "<br>";
    }
} else {
    echo '<section class="cadree2"> <div class="cadree" id="1">
       <div class="titrepubb">
        <p><b> Evenements Nationales </b></p><br> </div>
        <div class="infopubb">
       <p> <img src="icons8-earth-50.png" alt="" height="30px"><span> Type : </span> ..................... </p>
       <p><img src="icons8-people-50.png" alt="" height="30px"><span>  Résponsables : </span>...................</p>
       <p></p><img src="icons8-date-50.png" alt="" height="30px"><span> Anneé : </span>......... /.............</p> <br>
      </div>
      </div>


 </section> 
 <section class="cadree2">
 <div class="cadree" id="2">
       <div class="titrepubb">
        <p ><b> Evenementes Internationales </b></p><br> </div>
        <div class="infopubb">
       <p> <img src="icons8-earth-50.png" alt="" height="30px"><span> Type : </span> ..................... </p>
       <p><img src="icons8-people-50.png" alt="" height="30px"><span>  Résponsables : </span> ...................</p>
       <p></p><img src="icons8-date-50.png" alt="" height="30px"><span> Anneé : </span>.......... /.............</p> <br>
      </div>
      </div>


 </section>' ;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
    </section>
  <section>
  <!--Start Footer -->
      <br><div class="footer" Align="center"> <br>
        <img src="logo.png" height="75px" width="160px" id="logo" Align="left">
        <img src="logo.png" height="75px" width="160px" id="logo" Align="right">
        <h3>LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES <br> Université Saad Dahlab - Blida 1  |  Faculté des Sciences  </h3> <br>
        <h2>Tel: + 213 (0)25 27 24 36  <br> Email: lrdsi@univ-blida.dz</h2>
        <br><p class="copyright"> &copy; 2023 All Rights Reserved to LRDSI</p>
      </div>

    </section>
  </body>
  </html>  