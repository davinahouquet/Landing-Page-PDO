<?php

// si nous recevons des données d'un formulaire par POST
if (isset($_POST) && isset($_POST["submit"])) {

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $bandwidth = filter_input(INPUT_POST, "bandwidth_gb", FILTER_SANITIZE_SPECIAL_CHARS);
    $onlinespace = filter_input(INPUT_POST, "onlinespace_mb", FILTER_SANITIZE_SPECIAL_CHARS);
    $support = filter_input(INPUT_POST, "support_no", FILTER_SANITIZE_SPECIAL_CHARS);
    $domain = filter_input(INPUT_POST, "domain", FILTER_SANITIZE_SPECIAL_CHARS);
    $hidden_fees = filter_input(INPUT_POST, "hidden_fees", FILTER_SANITIZE_SPECIAL_CHARS);
    $sale = filter_input(INPUT_POST, "sale", FILTER_SANITIZE_SPECIAL_CHARS);

    // "filtrer" (utiliser les FILTER) pour la sécurité, le nettoyage des données
    // Utilier uniquement les données filtrées, logique sinon ça sert à rien de les filtrer
    // rediriger (redirection) vers la bonne page, éventuellement en fonction des résultats (mais ici pour commencer, rediriger vers la même page (admin.php))
    if($name !== false && $price !== false && $bandwidth !== false && $onlinespace !== false && $support !== false && $domain !== false && $hidden_fees !== false && $sale !== false){
        $pricing = [
            "name" => $name,
            "price" => $price,
            "bandwidth_gb" => $bandwidth,
            "onlinespace_mb" => $onlinespace,
            "support_no" => $support,
            "domain" => $domain,
            "hidden_fees" => $hidden_fees,
            "sale" => $sale
        ];
        $requeteSQL = "UPDATE pricing SET nom_formule = '" . $_POST["nom_formule"] . "', prix = " . $_POST["prix"] . ", sale = " . $_POST["sale"] . ", bandwidth = " . $_POST["bandwidth"] . ", onlinespace = " . $_POST["onlinespace"] . ", support = " . $_POST["support"] . ", domain = '" . $_POST["domain"] . "', hidden_fees = " . $_POST["hidden_fees"] ." WHERE id_pricing = " . $_GET["id_pricing"];
        
        header("Location:admin.php");
    }
    
    
}
?>
