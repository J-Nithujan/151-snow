<?php
ob_start();

$title = "SnowPoint . Détail de l'Article";

if(isset($articleInfo)){
?>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">

                <div class="slick3">
                    <div class="item-slick3" data-thumb="images/thumb-item-01.jpg">
                        <div class="wrap-pic-w">
                            <img src=<?=$articleInfo['photo']?> alt="IMG-PRODUCT">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?= $articleInfo['brand'].' '.$articleInfo['model']?>
            </h4>

            <span class="m-text17">
                Prix <?= $articleInfo['price'] ?> CHF
            </span>

            <p class="s-text8 p-t-10">
                <?= $articleInfo['description'] ?>
            </p>

            <!--  -->
            <div class="p-t-33 p-b-60">
                <div class="flex-m flex-w p-t-15 of-hidden w-size16 bo7">
                    <div class="s-text15 w-size15 t-center">
                        Code
                    </div>

                    <div class="rs2-select2 rs3-select2 of-hidden w-size16">
                        <?= $articleInfo['code'] ?>
                    </div>
                </div>

                <div class="flex-m flex-w p-t-15 of-hidden w-size16 bo7">
                    <div class="s-text15 w-size15 t-center">
                        Longeur
                    </div>

                    <div class="rs2-select2 rs3-select2 of-hidden w-size16">
                        <?= $articleInfo['snowLength'] ?>
                    </div>
                </div>

                <div class="flex-m flex-w p-t-15 of-hidden w-size16 bo7">
                    <div class="s-text15 w-size15 t-center">
                        Niveau
                    </div>

                    <div class="rs2-select2 rs3-select2 of-hidden w-size16">
                        <?= $articleInfo['level'] ?>
                    </div>
                </div>

                <div class="flex-r-m flex-w p-t-10">
                    <div class="w-size16 flex-m flex-w">
                        <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                            </button>

                            <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>

                        <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                            <!-- Button -->
                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Description
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        <?= $articleInfo['descriptionFull'] ?>
                    </p>
                </div>
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
