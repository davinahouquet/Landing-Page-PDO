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
    <link rel="stylesheet" href="style.css">
    <title>Landing Page Pricing PDO</title>
</head>
<body>
    <section class="pricing-section">

            <div class="pricing-container">

                <div class="pricing-packs-title-text">
                    <h3 class="pricing-title">Our Pricing</h3>
                    <p class="pricing-text">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>

                <div class="pricing-packs">
                    <?php
                    
                    foreach(getAll() as $pricing){
                        echo "<p>Nom :".$pricing['name']."</p>";
                    }
                    

                    ?>
                    <div class="pricing-pack">
                        <p class="pack-type"></p>
                        <div class="pack-price">
                            <sup class="dollar">$</sup>
                            <p class="price"></p>
                            <span>/month</span>
                        </div>
                        <div class="lists-options">
                            <ul class="options">
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Bandwidth</div><p></p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Onlinespace</div><p><</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check-red"></i>Support:No</div><p></p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Domain</div><p>/p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check-red"></i>Hidden Fees</div><p></p></li>
                            </ul>
                        </div>
                        <button class="pricing-pack-button"><a href="#">Join Now</a></button>
                    <div class="pricing-pack">
                        <div class="advanced-type-promo">
                        <p class="pack-type">Advanced</p>
                        <div class="promo-pricing-pack">20% sale</div></div>
                        <div class="pack-price">
                            <sup class="dollar">$</sup>
                            <p class="price">29</p>
                            <span>/month</span>
                        </div>
                        <div class="lists-options">
                            <ul class="options">
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Bandwidth</div><p>2GB</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Onlinespace</div><p>1GB</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Support:No</div><p>Yes</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Domain</div><p>3</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Hidden Fees</div><p>No</p></li>
                            </ul>
                        </div>
                        <button class="pricing-pack-button"><a href="#">Join Now</a></button>
                    </div>
                    <div class="pricing-pack">
                        <p class="pack-type">Professional</p>
                        <div class="pack-price">
                            <sup class="dollar">$</sup>
                            <p class="price">29</p>
                            <span>/month</span>
                        </div>
                        <div class="lists-options">
                            <ul class="options">
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Bandwidth</div><p>3GB</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Onlinespace</div><p>2GB</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Support:No</div><p>Yes</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Domain</div><p>Unlimited</p></li>
                                <li><div><i class="fa-regular fa-circle-check" id="check"></i>Hidden Fees</div><p>No</p></li>
                            </ul>
                        </div>
                        <button class="pricing-pack-button"><a href="#">Join Now</a></button>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
</body>
</html>