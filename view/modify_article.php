<?php

ob_start();
$title = "SnowPoint . Mise à jour d'article";

if (isset($article)) {
?>

    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg); ">
        <h2 class="l-text2 t-center">
            Mise à jour d'article
        </h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">

                <div class="col-md-12 p-b-30">

                    <form class="leave-comment" method="post" enctype="multipart/form-data" action="index.php?action=saveChanges&articleId=<?= $article['id']?>">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Modifications
                        </h4>

                        <label for="code">Code</label>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" value="<?=$article['code']?>" readonly>
                        </div>

                        <label for="brand">Marque</label>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="brand" value="<?= $article['brand']?>" required>
                        </div>

                        <label for="model">Modèle</label>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="model" value="<?= $article['model']?>" required>
                        </div>

                        <label for="snowLength">Longueur</label>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="snowLength" value="<?= $article['snowLength']?>" required>
                        </div>

                        <label  for="price">Prix</label>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="price" value="<?=$article['price']?>" required>
                        </div>

                        <label  for="qtyAvailable">Quantité</label>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="qtyAvailable" value="<?=$article['qtyAvailable']?>" required>
                        </div>

                        <label for="photo">Photo</label>
                        <div class="bo4 of-hidden size15 m-b-20 p-t-10">
                            <input class=" s-text7 p-l-22 p-r-22" type="file" accept="image/*,.jpeg, .jpg, .png" name="photo" required>
                        </div>

                        <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden size15 p-t-10 p-l-15 m-b-15">
                            <select class="selection-2" name="audience" required>
                                <option value="Pour qui?" disabled>Pour qui?</option>
                                <option value="Homme" <?php if ($article['audience'] == 'Homme') { ?> selected <?php } ?>>Homme</option>
                                <option value="Femme" <?php if ($article['audience'] == 'Femme') { ?> selected <?php } ?>>Femme</option>
                                <option value="Femme" <?php if ($article['audience'] == 'Enfant') { ?> selected <?php } ?>>Enfant</option>
                            </select>
                        </div>

                        <input type="submit" value="Mettre à jour l'article" class="flex-c-s size11 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        <input type="submit" value="Annuler" onclick="history.back()" class="flex-c-s size11 bg4 bo-rad-23 hov1 m-text3 trans-0-4 m-t-10">
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
}
$content = ob_get_clean();
require "gabarit.php";