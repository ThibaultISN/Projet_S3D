<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>NCALP38 - <?= $article->titre ?></title>
        <?php include_once($headPath); ?>
        <!-- Styles supplementaires -->
        <link rel="stylesheet" href="/view/styles/Specific/ActuFullPage.css">
        <?php include_once($manifestPath); ?>
        <?php include_once($PWAPath); ?>
    </head>
    <body>
        <!-- No responsive -->
        <div class="noResponsive">
            <p>Utilisez cette page sur un smartphone ou reduisez votre ViewPort</p>
        </div>

        <!-- Liste d'actualite -->
        <section class="ActuFullPage-ViewPort">
            <!-- bouton retour -->
            <a class="ActuFullPage-Retour" href="crtl_Actualite.php">
                <img class="ActuFullPage-RetourIcon NavBar-IconPictureInactif" src="<?= $iconPath ?>Cross.svg">
            </a>
            <img class="ActuFullPage-Image" src="<?= $article->img ?>">
            <div class="ActuFullPage-Text">
                <span class="ActuFullPage-Titre"><?= $article->titre ?></span>
                <span class="ActuFullPage-Date"><?= $article->datepub ?></span>
                <span class="ActuFullPage-Texte"><?= $article->contenu ?></span>
            </div>
        </section>

    </body>
</html>