<?php
    
   

// si nous recevons des données d'un formulaire par POST
if (isset($_POST) && isset($_POST["submit"])) {
    
    $name = filter_input(INPUT_POST, "pricing-form-name", FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_input(INPUT_POST, "pricing-form-price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $bandwidth = filter_input(INPUT_POST, "pricing-form-bandwidth", FILTER_SANITIZE_SPECIAL_CHARS);
    $onlinespace = filter_input(INPUT_POST, "pricing-form-onlinespace", FILTER_SANITIZE_SPECIAL_CHARS);
    $support = filter_input(INPUT_POST, "pricing-form-support", FILTER_SANITIZE_SPECIAL_CHARS);
    $domain = filter_input(INPUT_POST, "pricing-form-domain", FILTER_SANITIZE_SPECIAL_CHARS);
    $hidden_fees = filter_input(INPUT_POST, "pricing-form-hidden-fees", FILTER_SANITIZE_SPECIAL_CHARS);
    $sale = filter_input(INPUT_POST, "pricing-form-sale", FILTER_SANITIZE_SPECIAL_CHARS);
    $id_pricing = $_GET['id'];
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
            "sale" => $sale,
            "id_pricing" => $id_pricing
        ];
        
        $mysqli = connexion(); //Il faut pouvoir se connecter à la BDD (appel de la fonction qui est faote pour se connecter à la BDD dans db-functions). Essentielle sinon pas de lien
        
        
        $mysqli = $mysqli->prepare(
            "UPDATE pricing 
            SET name = :name,
            price = :price,
            sale = :sale,
            bandwidth_gb = :bandwidth_gb,
            onlinespace_mb = :onlinespace_mb,
            support_no = :support_no,
            domain = :domain,
            hidden_fees = :hidden_fees 
            WHERE id_pricing = :id_pricing");


// var_dump($_POST);
        // var_dump($name);die;
        
        $mysqli->execute([
            "name" => $name,
            "price" => $price,
            "sale"=> $sale,
            "bandwidth_gb"=> $bandwidth,
            "onlinespace_mb" => $onlinespace,
            "support_no" => $support,
            "domain" => $domain,
            "hidden_fees" => $hidden_fees,
            "id_pricing" => $id_pricing
        ]);
        
        // echo 'test';die;

        header("Location:admin.php");
    }
       
}
?>
