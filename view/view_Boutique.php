<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>NCALP38 - Actualités</title>
        <?php include_once($headPath); ?>
        <!-- Styles supplementaires -->
        <link rel="stylesheet" href="/view/styles/Specific/Actu-Vignette.css">
        <link rel="stylesheet" href="/view/styles/Specific/ListeActu.css">
        <link rel="stylesheet" href="/view/styles/Common/NavBar.css">
        <?php include_once($manifestPath); ?>
        <?php include_once($PWAPath); ?>
        <?php include_once($sessionPath); ?>
    </head>
    <body class="ListeActu">
        <!-- No responsive -->
        <div class="noResponsive">
            <p>Utilisez cette page sur un smartphone ou reduisez votre ViewPort</p>
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
                <img class="NavBar-IconPictureActif" src="<?= $iconPath ?>Boutique.svg">
                <span class="NavBar-IconNameActif">Boutique</span>
            </a>
            <a class="NavBar-Icon" href="<?= $Compte ?>">
                <img class="NavBar-IconPictureInactif" src="<?= $iconPath ?>Compte.svg">
                <span class="NavBar-IconNameInactif">Compte</span>
            </a>
        </nav>

        <!-- Titre -->
        <span id="headertitle" class="ListeActu-Entete">
            Boutique
            <!-- AddNewsButton -->
            <?php
                if ($_SESSION['admin']) {
                    echo '<a style="width: 32px; height: 32px;" href="crtl_EditBoutique.php">';
                    echo '    <img class="ListeActu-Ajouter NavBar-IconPictureActif" src="'.$iconPath.'Add.svg">';
                    echo '</a>';
                }
            ?>
        </span>

        <!-- Liste d'actualite -->
        <?php
            foreach ($list as $article) {
                echo '<form action="crtl_BoutiquePage.php" method="post">';
                echo '  <button type="submit" class="Actu" name="id" value="'.$article->id.'"/>';
                echo '      <img class="Actu-Image" src="'.$article->img.'">';
                echo '      <div class="Actu-Text">';
                echo '          <span class="Actu-Date">'.$article->prix.'$'.'</span>';
                echo '          <span class="Actu-Titre">'.$article->titre.'</span>';
                echo '      </div>';
                echo '  </button>';
                echo '</form>';
                if ($_SESSION['admin']) {
                    echo '<form class="Actu-DeleteForm" id="delete" action="" method="post">';
                    echo '  <button class="Actu-Delete" onclick="supprimerBoutique()" name="id" value="'.$article->id.'">';
                    echo '      <span>Supprimer l\'article</span>';
                    echo '  </button>';
                    echo '</form>';
                }
            }
        ?>

        <!-- Padding de rehaussement du dernier element -->
        <div class="ListeActu-Empty"></div>

    </body>
    <script>
        <?php include_once($supprimerPath); ?>
    </script>
</html>