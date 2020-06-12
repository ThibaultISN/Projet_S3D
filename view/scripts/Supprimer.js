/***************
 * Pop-up de confirmation de suppression d'article de la base de donnees
 */
function supprimerArticle() {
    if (confirm("Voulez vous supprimer cet article ?")) {
        document.getElementById("delete").action = "crtl_DeleteActualite.php";
    }
}

/***************
 * Pop-up de confirmation de suppression d'article boutique de la base de donnees
 */
function supprimerBoutique() {
    if (confirm("Voulez vous supprimer cet article ?")) {
        document.getElementById("delete").action = "crtl_DeleteBoutique.php";
    }
}

/***************
 * Pop-up de confirmation de suppression de compte de la base de donnees
 */
function supprimerCompte() {
    if (confirm("Voulez vous supprimer ce compte ?")) {
        document.getElementById("delete").action = "crtl_DeleteCompte.php";
    }
}