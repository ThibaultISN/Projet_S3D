<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>NCALP38 - Inscription</title>
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
        <form class="EditActualite-TopForm" action="crtl_UploadInscription.php" method="post" enctype="multipart/form-data">
            <div class="EditActualite-TextDiv">
                <input class="EditActualite-Titre" type="text" id="nom" name="nom" placeholder="Nom"><hr>
                <input class="EditActualite-Titre" type="text" id="prenom" name="prenom" placeholder="Prenom"><hr>
                <input class="EditActualite-Titre" type="email" id="email" name="email" placeholder="E-mail"><hr>
                <input class="EditActualite-Titre" type="password" id="mdp" name="mdp" placeholder="Mot de passe">
            </div>
            <div class="EditActualite-SubmitZone">
                <button class="EditActualite-Submit" type="submit" value="inscription" name="inscription">S'inscrire</button>
            </div>
        </form>

    </body>
</html>