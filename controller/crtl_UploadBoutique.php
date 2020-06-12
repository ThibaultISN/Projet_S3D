<?php
    require_once('../config/dataLocation.php');

    require_once('../model/class_ArticleBoutique.php');
    require_once('../model/class_BoutiqueDAO.php');

    $config = parse_ini_file('../config/config.ini');

    $articles = new BoutiqueDAO($config['database_path']);

    $target_dir = $imgPathRoot;
    $target_file = $target_dir.basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $present = 0;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Verification du type de fichier
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            echo "Ce fichier est une image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Ce ficheir n'est pas une image";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "AH, mais ce fichier est deja present !!!";
        $present = 1;
    }

    // Verification de la taille du fichier
    if ($_FILES["file"]["size"] > 8000000) {
        echo "Desole, votre fichier est trop lourd";
        $uploadOk = 0;
    }

    // Verification du format du fichier
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Seul les jpg, jpeg, png sont autorises";
        $uploadOk = 0;
    }

    // Verification global si le fichier peut etre envoye
    if ($uploadOk == 0) {
        echo "Desole, mais votre fichier n'a pas etait envoye";
    } else {
        if ($present == 0) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
            } else {
                echo "Il y a eu une erreur a l'ajout de votre fichier";
            }
        }
        // Creation de l'article
        $articles->setArticleBoutique($_POST['titre'], $_POST['description'], $_POST['prix'], basename($_FILES["file"]["name"]));
    }

    header('Location: /controller/crtl_Boutique.php');

?>