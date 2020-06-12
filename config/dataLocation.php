<?php
    /**************************
     * Variables d'emplacement des donnees du site
     */

    $config = parse_ini_file('../config/config.ini');

    $ROOT = $config['root'];

    /***********************
     * Elements d'entete
     */
    $headPath = "$ROOT/view/layout/layout_head.php";
    $navbarPath = "$ROOT/view/layout/layout_navbar.php";
    $manifestPath = "$ROOT/view/layout/layout_manifest.php";
    $PWAPath = "$ROOT/view/layout/layout_PWA.php";
    $sessionPath = "$ROOT/view/layout/layout_session.php";

    /***********************
     * Elements de script 
     */
    $imgPreviewPath = "$ROOT/view/scripts/ImgPreview.js";
    $supprimerPath = "$ROOT/view/scripts/Supprimer.js";

    /***********************
     * Emplacement de page
     */
    $Actualite = "crtl_Actualite.php";
    $Boutique = "crtl_Boutique.php";
    //$EditActualite = "crtl_EditActualite.php";
    $Compte = "crtl_User.php";

    /***********************
     * Emplacement de donnees
     */
    $imgPath = "/data/graphic/img/";
    $imgPathRoot = "$ROOT/data/graphic/img/";
    $iconPath = "/data/graphic/icons/";

?>