<?php

ob_start();
$title = "SnowPoint . Ajout d'article";
?>

    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg); ">
        <h2 class="l-text2 t-center">
            Ajout d'article
        </h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">

                <div class="col-md-12 p-b-30">

                    <!--                <form class="leave-comment" method="post" action="../index.php?login">-->
                    <form class="leave-comment" method="post" enctype="multipart/form-data"  action="index.php?action=addArticle">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Nouvel article
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" maxlength="4" placeholder="Code de l'article" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="brand" placeholder="Marque de l'article" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="model" placeholder="Modèle de l'article" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="snowLength" placeholder="Longeur de l'article" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="price" placeholder="Prix de l'article" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="qtyAvailable" placeholder="Quantité" required>
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20 p-t-10">
                            <label class="s-text3 p-l-22 p-r-22" for="photo">Image :</label>

                            <input class=" s-text7 p-l-22 p-r-22" type="file" accept="image/*,.jpeg, .jpg, .png" name="photo" required>
                        </div>

                        <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden size15 p-t-10 p-l-15 m-b-15">
                            <select class="selection-2" name="audience" required>
                                <option value="Pour qui?" selected disabled>Pour qui?</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Enfant">Enfant</option>
                            </select>
                        </div>

                        <input type="submit" value="Ajouter l'article" class="flex-c-s size11 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        <input type="submit" value="Annuler" onclick="history.back()" class="flex-c-s size11 bg4 bo-rad-23 hov1 m-text3 trans-0-4 m-t-10">
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require "gabarit.php";