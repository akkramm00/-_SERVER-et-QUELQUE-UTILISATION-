<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
$server_name_script = $_SERVER['SCRIPT_NAME'];
echo "votre nom de script : ". $server_name_script ;//affichera : index.php/ le nom du script en cours d'exécution :
echo "<br>";

$server_uri = $_SERVER['REQUEST_URI'];
echo "L' URI du serveur est : ". $server_uri ;// Recupère l'URI de la requete;
echo "<br>";

 $server_method = $_SERVER['REQUEST_METHOD'];
echo 'la méthode utilisée est :' .$server_method ;// Récupere la methode utilisée;
echo "<br>";

$server_name = $_SERVER['SERVER_NAME'];
echo "Le nom de l'hote est :" .$server_name ;//Récuoere le nom de l'hote;
echo "<br>";

$server_port = $_SERVER['SERVER_PORT'];
echo "le nom du port est :" . $server_port; //récupere le numéro de port du serveur.
echo "<br>";

$server_soft = $_SERVER['SERVER_SOFTWARE'];
echo " Le nom du serveur est :" .$server_soft ; // récuoer le nom du serveur;
echo "<br>" ;








     ?> 














    

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>