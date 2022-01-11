<?php
ob_start();
$title = "SnowPoint . Articles";

if(isset($articles))
{ ?>

    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg);"> <?php // TODO: analyzed by garait.php so must spedifiy path from its location ?>
        <h2 class="l-text2 t-center">
            Gestion des articles
        </h2>
    </section>

    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-lg-12 p-b-50"> <!-- before: col-lg-9  -->
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Article</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Modèle</th>
                                <th scope="col">Longeur</th>
                                <th scope="col">Prix à l'unité</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">
                                    <a href="index.php?action=addArticle">
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            Ajouter
                                        </button>
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($articles as $article) {
                                if ($article['active']) { ?>
                                <tr>
                                    <td class="align-middle"><?=$article['code'] ?></td>
                                    <td class="align-middle"><div class="cart-img-product b-rad-4 o-f-hidden"><img src="<?=$article['photo'] ?>" class="img-fluid" alt="IMG-PRODUCT"></div></td>
                                    <td class="align-middle"><?=$article['model'] ?></td>
                                    <td class="align-middle"><?=$article['snowLength'] ?></td>
                                    <td class="align-middle"><?=$article['price'] ?> CHF</td>
                                    <td class="align-middle"><?=$article['qtyAvailable'] ?></td>
                                    <td class="align-middle">
<!--                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">-->
                                        <a href="index.php?action=removeArticle&articleId=<?=$article['id'] ?>">
                                            <button class="flex-c-m size4 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                                <img src="view/content/images/icons/bin2.png">
                                            </button>
                                        </a>
                                        <br>
                                        <a href="index.php?action=editArticle&articleId=<?=$article['id'] ?>">
                                            <button class="flex-c-m size4 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                <img src="view/content/images/icons/pencil2.png">
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }

$content = ob_get_clean();
require "gabarit.php";