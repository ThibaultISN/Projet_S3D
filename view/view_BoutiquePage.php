<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>NCALP38 - <?= $article->titre ?></title>
        <?php include_once($headPath); ?>
        <!-- Styles supplementaires -->
        <link rel="stylesheet" href="/view/styles/Specific/BoutiqueFullPage.css">
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
            <a class="BoutiqueFullPage-Retour" href="crtl_Boutique.php">
                <img class="BoutiqueFullPage-RetourIcon NavBar-IconPictureInactif" src="<?= $iconPath ?>Cross.svg">
            </a>
            <img class="ActuFullPage-Image" src="<?= $article->img ?>">
            <div class="ActuFullPage-Text">
                <div class="BoutiqueFullPage-PremiereLigne">
                    <span class="ActuFullPage-Titre"><?= $article->titre ?></span>
                    <span class="BoutiqueFullPage-Prix"><?= $article->prix ?>$</span>
                </div>
                <span class="BoutiqueFullPage-BuyButton">Acheter</span>
                <span class="ActuFullPage-Texte">Description :</span>
                <span class="ActuFullPage-Description"><?= $article->description ?></span>
            </div>
        </section>

    </body>
</html>