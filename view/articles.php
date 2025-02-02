<?php
ob_start();
$title = "SnowPoint . Articles";

if(isset($articles)){
    ?>
    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg);"> <?php // TODO: analyzed by garait.php so must spedifiy path from its location ?>
        <h2 class="l-text2 t-center">
            Nos Snows
        </h2>
    </section>

    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-lg-12 p-b-50"> <!-- before: col-lg-9  -->
                    <div class="row">
                    <?php
                        foreach ($articles as $article)
                        {
                            if ($article['active']) {
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <?php # if(is_file()) ?>
                                    <img src=<?=$article['photo'];?> alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <a href="index.php?action=cart">
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" >
                                            Add to Cart
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="index.php?articleId=<?= $article['id']?>&action=displayArticlesDetail" class="block2-name dis-block s-text3 p-b-5">
                                    <?= $article['brand']." ".$article['model']; ?>
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                                        <strong>Disponiblité</strong>: <?= $article['qtyAvailable']; ?>
                                    </span>
                                    <br>
                                    <span class="block2-price m-text6 p-r-5">
                                    CHF <?= $article['price']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php
                            }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
else
{
    echo "Critical Error";
}
$content = ob_get_clean();
require "gabarit.php";
