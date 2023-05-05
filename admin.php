<?php
//Créer une interface servant à mettre à jour les données de pricing depuis un fichier admin.php
// Il faudra afficher un message de réussite ou d’erreur+
 require('db-functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>Update Pricing</title>
</head>
<body>
    <section class="update-pricing"><h2 class="update-pricing-title">Update Pricing</h2>
        <div class="update-container-container">
        <?php
            foreach(getAllPricings() as $pricing) {
                // GET avec propriétés/valeurs passées en URL : site.com?arg1=val1&arg2=val2&arg3=val3
                // POST : formulaire "caché", données à récupérer dans $_POST qui est un tableau associatif et qui aura :
                    // - pour clefs : les valeurs des attributs HTML "name" des champs du formulaire
                    // - pour valeur : les valeurs des champs du formulaire (valeur de l'attribut HMLT "value" pour un input, ...)
        ?>
                <div class="update-container">
                    <form action="form-functions.php?id=<?=$pricing['id_pricing']?>" method="POST">
                        <div class="pricing-pack-update">
                            <div class="update-pricing-row">
                                <div class="update">Name<input type="text" name="pricing-form-name" value="<?= $pricing["name"] ?>" /></div>
                                <div class="update">Price<input type="number" name="pricing-form-price" value="<?=$pricing["price"]?>"/></div>
                            </div>
                            <div class="update-pricing-row">
                                <div class="update">Sale<input type="number" name="pricing-form-sale" value="<?=$pricing['sale']?>"/></div>
                                <div class="update">Bandwidth<input type="number" name="pricing-form-bandwidth" value="<?=$pricing["bandwidth_gb"]?>"></div>
                            </div>
                            <div class="update-pricing-row">
                                <div class="update">OnlineSpace<input type="number" name="pricing-form-onlinespace" value="<?=$pricing["onlinespace_mb"]?>"/></div>
                                <div class="update">Support<input type="text" name="pricing-form-support" value="<?=$pricing["support_no"]?>"/></div>
                            </div>
                            <div class="update-pricing-row">
                                <div class="update">Domain<input type="number" name="pricing-form-domain" value="<?=$pricing["domain"]?>"/></div>
                                <div class="update">Hidden Fees<input type="text" name="pricing-form-hidden-fees" value="<?=$pricing["hidden_fees"]?>"/></div>
                            </div>
                            <button type="submit" value="update" name="submit" class="update-pricing-button">Update</button>
                        </div>
                    </form>
                </div>
        <?php
            }
        ?>
        </div>
    </section>
</body>
</html>