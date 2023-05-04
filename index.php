<?php
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
    <title>Landing Page Pricing PDO</title>
</head>
<body>
    <section class="pricing-section">

            <div class="pricing-container">

                <div class="pricing-packs-title-text">
                    <h3 class="pricing-title">Our Pricing</h3
                    <p class="pricing-text">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
            </div>
            <div class="container-packs">
                <?php
                    
                    foreach(getAll() as $pricing){
                        
                        echo '<div class="pricing-packs">
                         <div class="pricing-pack">
                                <p class="pack-type"><p>'.$pricing['name'].'</p>
                                    <div class="pack-price">
                                        <sup class="dollar">$</sup>
                                        <p class="price">'.$pricing['price'].'</p>
                                        <span>/month</span>
                            </div>
                            <div class="lists-options">
                                <ul class="options">
                                    <li><div><i class="fa-regular fa-circle-check" id="check"></i>Bandwidth</div><p>'.$pricing['bandwidth_gb'].'GB</p></li>
                                    <li><div><i class="fa-regular fa-circle-check" id="check"></i>Onlinespace</div><p>'.($pricing['onlinespace_mb'] >= 1000 ? ($pricing['onlinespace_mb'] / 1000) . ' GB' : $pricing['onlinespace_mb'] . ' MB').'</p></li>
                                    <li><div><i class="fa-regular fa-circle-check" id="'.($pricing['support_no'] == 0 ? 'check-red' : 'check').'"></i>Support:No</div><p>'.($pricing['support_no'] == 0 ? 'No' : ($pricing['support_no'] == 1 ? 'Yes' : $pricing['support_no'])).'</p></li>
                                    <li><div><i class="fa-regular fa-circle-check" id="check"></i>Domain</div><p>'.($pricing['domain'] ? $pricing['domain'] : 'Unlimited').'</p></li>
                                    <li><div><i class="fa-regular fa-circle-check" id="'.($pricing['hidden_fees'] == 0 ? 'check-red' : 'check').'"></i>Hidden Fees</div><p>'.($pricing['hidden_fees'] == 0 ? 'No' : $pricing['hidden_fees']).'</p></li>
                                    <li><div class="sale-pricing-pack"><p>'.($pricing['sale'] == 0 ? '' : 'SALE '.$pricing['sale']).'</p></div></li>
                                </ul>
                            </div>
                            <button class="pricing-pack-button"><a href="#">Join Now</a></button>
                            </div>';
                    }      
                    //Pour onlinespace: il faut insérer les données dans la BDD en unité MB sinon pas de conversion en GB              
                    //support:no :operateur ternaire, si c'est égal à 1 = echo Yes, si égal à 0 = echo No https://stacklima.com/php-operateur-ternaire/#:~:text=op%C3%A9rateur%20ternaire%20%3A%20L'op%C3%A9rateur%20ternaire,code%20effectuant%20des%20op%C3%A9rations%20conditionnelles.
                    ?>
            </div>        
                  
        

    </section>
</body>
</html>
<?php include('admin.php') ?>