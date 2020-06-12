<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>NCALP38 - Connexion</title>
        <?php include_once($headPath); ?>
        <!-- Styles supplementaires -->
        <link rel="stylesheet" href="/view/styles/Specific/EditActualite.css">
        <?php include_once($manifestPath); ?>
        <?php include_once($PWAPath); ?>
    </head>
    <body>
        <!-- No responsive -->
        <div class="noResponsive">
            <p>Utilisez cette page sur un smartphone ou reduisez votre ViewPort</p>
        </div>

        <!-- Ajout de la headerbar -->
        <link rel="stylesheet" href="/view/styles/Common/HeaderBar.css">

        <!-- Formulaire de creation d'actualite -->
        <form class="EditActualite-TopForm" action="crtl_UploadConnexion.php" method="post" enctype="multipart/form-data">
            <div class="EditActualite-TextDiv">
                <input class="EditActualite-Titre" type="email" id="email" name="email" placeholder="E-mail"><hr>
                <input class="EditActualite-Titre" type="password" id="mdp" name="mdp" placeholder="Mot de passe">
            </div>
            <div class="EditActualite-SubmitZone">
                <button class="EditActualite-Submit" type="submit" value="connexion" name="connexion">Se connecter</button>
            </div>
        </form>

    </body>
</html>