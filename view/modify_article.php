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

                    <form class="leave-comment" method="post" enctype="multipart/form-data" action="index.php?action=saveChanges&articlId=<?= $article[0]['id']?>">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Article
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" value="<?=$article[0]['code']?>" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="brand" value="<?= $article[0]['brand']?>" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="model" value="<?= $article[0]['model']?>" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="snowLength" value="<?= $article[0]['snowLength']?>" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="price" value="<?=$article[0]['price']?>" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="qtyAvailable" value="<?=$article[0]['qtyAvailable']?>" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20 p-t-10">
                            <label class="s-text3 p-l-22 p-r-22" for="photo">Image :</label>

                            <input class=" s-text7 p-l-22 p-r-22" type="file" accept="image/*,.jpeg, .jpg, .png" name="photo" required>
                        </div>

                        <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden size15 m-b-20">
                            <select class="selection-2" name="audience" required>
                                <option value="Pour qui?" disabled>Pour qui?</option>
                                <option value="Homme" <?php if ($article[0]['audience'] == 'Homme') { ?> selected <?php } ?>>Homme</option>
                                <option value="Femme" <?php if ($article[0]['audience'] == 'Femme') { ?> selected <?php } ?>>Femme</option>
                            </select>
                        </div>

                        <input type="submit" value="Mettre à jour l'article" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4"><br>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
}
$content = ob_get_clean();
require "gabarit.php";