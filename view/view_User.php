<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>NCALP38 - Compte</title>
        <?php include_once($headPath); ?>
        <!-- Styles supplementaires -->
        <link rel="stylesheet" href="/view/styles/Specific/Compte.css">
        <link rel="stylesheet" href="/view/styles/Specific/ListeActu.css">
        <link rel="stylesheet" href="/view/styles/Common/NavBar.css">
        <?php include_once($manifestPath); ?>
        <?php include_once($PWAPath); ?>
        <?php include_once($sessionPath); ?>
    </head>
    <body class="ListeActu">
        <!-- No responsive -->
        <div class="noResponsive">
            <p>Utilisez cette page sur un smartphone ou réduisez votre affichage</p>
        </div>

        <!-- Ajout de la navbar -->
        <nav class="NavBar">
            <a class="NavBar-Icon" href="<?= $Actualite ?>">
                <img class="NavBar-IconPictureInactif" src="<?= $iconPath ?>Actu.svg">
                <span class="NavBar-IconNameInactif">Actualités</span>
            </a>
            <a class="NavBar-Icon" href="#">
                <img class="NavBar-IconPictureInactif" src="<?= $iconPath ?>Calendrier.svg">
                <span class="NavBar-IconNameInactif">Calendrier</span>
            </a>
            <a class="NavBar-Icon" href="<?= $Boutique ?>">
                <img class="NavBar-IconPictureInactif" src="<?= $iconPath ?>Boutique.svg">
                <span class="NavBar-IconNameInactif">Boutique</span>
            </a>
            <a class="NavBar-Icon" href="<?= $Compte ?>">
                <img class="NavBar-IconPictureActif" src="<?= $iconPath ?>Compte.svg">
                <span class="NavBar-IconNameActif">Compte</span>
            </a>
        </nav>

        <!-- Titre -->
        <span id="headertitle" class="ListeActu-Entete">
            Compte
        </span>

        <!-- Compte -->
        <?php
            if($_SESSION['CONNECTER']) {
                echo '<div class="Compte-Liste">';
                echo '  <span class="Compte-User">'.$_SESSION['nom'].'</span>';
                echo '  <a class="Compte-Deconnexion" href="crtl_Deconnexion.php">Se Deconnecter</a>';
                echo '  <form id="delete" action="" method="post">';
                echo '      <button class="Compte-ButtonSecondaire" onclick="supprimerCompte()" name="id" value="'.$_SESSION['id'].'">';
                echo '          <span>Supprimer le compte</span>';
                echo '      </button>';
                echo '  </form>';
                echo '</div>';
            } else {
                echo '<div class="Compte-Liste">';
                echo '  <a class="Compte-ButtonMain" href="crtl_Inscription.php">S\'inscrire</a>';
                echo '  <a class="Compte-ButtonSecondaire" href="crtl_Connection.php">Se connecter</a>';
                echo '</div>';
            }
        ?>

        <!-- Padding de rehaussement du dernier element -->
        <div class="ListeActu-Empty"></div>

    </body>
    <script>
        <?php include_once($supprimerPath); ?>
    </script>
</html>