<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, user-scalable=no">
        <title>Actualités</title>
        <link rel="stylesheet" href="/view/styles/Common/Color.css">
        <link rel="stylesheet" href="/view/styles/Main.css">
        <link rel="stylesheet" href="/view/styles/Common/Responsive.css">
        <link rel="stylesheet" href="/view/styles/Specific/Actu-Vignette.css">
        <link rel="stylesheet" href="/view/styles/Specific/ListeActu.css">
        <!-- Manifest -->
        <link rel="manifest" href="../manifest.json">
        <!-- PWA IOS -->
        <link rel="apple-touch-icon" href="../data/icons/logo-x256.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="apple-touch-startup-image" href="../data/img/SplashScreen.png">
    </head>
    <body class="ListeActu">

        <!-- Ajout de la navbar -->
        <?php include_once('layout/layout_navbar.php'); ?>

        <!-- Liste d'actualite -->
        <span id="headertitle" class="ListeActu-Entete">Actualités</span>
        <?php
            foreach ($list as $article) {
                echo '<a class="Actu" href="Actu1.html">';
                echo '  <img class="Actu-Image" src="'.$article->img.'">';
                echo '  <div class="Actu-Text">';
                echo '      <span class="Actu-Date">'.$article->datepub.'</span>';
                echo '      <span class="Actu-Titre">'.$article->titre.'</span>';
                echo '      <span class="Actu-Description">'.$article->contenu.'</span>';
                echo '</div>';
                echo '</a>';
            }
        ?>

        <div class="ListeActu-Empty"></div>
    </body>
</html>
