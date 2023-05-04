<?php
//Créer une interface servant à mettre à jour les données de pricing depuis un fichier admin.php
// Il faudra afficher un message de réussite ou d’erreur+

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
            foreach(getAll() as $pricing){
            echo '<div class="update-container">
                <form>
                    <div class="pricing-pack-update">
                        <div class="update-pricing-row">
                            <div class="update">Name<input type="text"></div>
                            <div class="update">Price<input type="number"></div>
                        </div>
                        <div class="update-pricing-row">
                            <div class="update">Sale<input type="number"></div>
                            <div class="update">Bandwidth<input type="number"></div>
                        </div>
                        <div class="update-pricing-row">
                            <div class="update">OnlineSpace<input type="number"></div>
                            <div class="update">Support<input type="text"></div>
                        </div>
                        <div class="update-pricing-row">
                            <div class="update">Domain<input type="number"></div>
                            <div class="update">Hidden Fees<input type="text"></div>
                        </div>
                        <button class="update-pricing-button">Update</button>
                    </div>
                </form>
            </div>';            
            }
        ?>
        </div>
    </section>
</body>
</html>