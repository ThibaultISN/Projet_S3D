<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>NCALP38 - Edition d'actualités</title>
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
        <form class="EditActualite-Form" action="crtl_UploadActualite.php" method="post" enctype="multipart/form-data">
            <div class="EditActualite-ImgDiv">
                <img id="EditActualite-Img" src="<?= $imgPath ?>SplashScreen.png"/>
                <div class="EditActualite-FileInputButtonZone">
                    <label class="EditActualite-FileInputButton">Changer la photo
                        <input class="EditActualite-FileInput" type="file" id="files" name="file"><br>
                    </label>
                </div>
            </div>
            <div class="EditActualite-TextDiv">
                <input class="EditActualite-Titre" type="text" id="titre" name="titre" placeholder="Titre de l'article"><hr>
                <label for="contenu">Contenu de l'article</label><br>
                <textarea name="contenu" rows=20></textarea>
            </div>
            <div class="EditActualite-SubmitZone">
                <button class="EditActualite-Submit" type="submit" value="Upload Image" name="submit">Publier l'article</button>
            </div>
        </form>

    </body>
    <script>
        <?php include_once($imgPreviewPath); ?>
    </script>
</html>