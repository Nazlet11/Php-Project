<?php

header('Location: connexion.php');

require_once('BDD_Manager.php');

$message_erreur = '';

if(isset($_GET['btnConnect'])) {
    if(isset($_GET['nom']) && $_GET['nom'] != '' &&
        isset($_GET['motdepasse']) && $_GET['motdepasse'] != '') {
        $message_erreur = connecteUtilisateur($_GET['nom'], $_GET['motdepasse']);
        if($message_erreur == '') {
            header('Location: index.php');
        }
    }
}
?>

<html>
<head>
<meta charset="UTF-8">
<title>  </title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/andy-pro" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../images/icon.ico">
<link rel="stylesheet" href="style.css">
</head>
<body>

<header id="head">
    <br>
        <br>
            <br>
                <br>
                    <br>
                        <br>
                        












<div id="barre">Connexion </div>




<hr class="separator">


</body>
</html>