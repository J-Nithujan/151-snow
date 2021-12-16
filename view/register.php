<?php
ob_start();
$title = "SnowPoint . S'enregistrer";
?>
    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg);"> <?php // TODO: analyzed by garait.php so must spedifiy path from its location ?>
        <h2 class="l-text2 t-center">
            Enregistrer-vous
        </h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">

                <div class="col-md-12 p-b-30">
                    <h2 style="color: red; ">
                        <?php
                        if(isset($errorMsg))
                        {
                            echo $errorMsg;
                        }?>
                    </h2>
                    <br>
                    <form class="leave-comment" method="post" action="index.php?action=register">

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" placeholder="Adresse email">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="userPswd" placeholder="Mot de passe">
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="userPswdConfirm" placeholder="Vérification mot de passe">
                        </div>

                        <div class="s-text26 p-b-15">En soumettant votre demande de compte, vous validez les conditions générales d'utilisation</div>
                        <input type="submit" value="S'enregistrer" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4"><br>
                        <input type="reset" value="Annuler" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">

                        <div class="s-text26 p-b-36 p-t-15">Déjà membre? <a href="index.php?action=login">Login</a></div>

                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
