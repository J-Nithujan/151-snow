<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   26-MAR-2021
 */

session_start();

require "controller/navigation.php";
require "controller/users.php";
require "controller/articles.php";
require "controller/article_detail.php";

if (isset($_GET['action']))
{
    $action = $_GET['action'];
    switch ($action)
    {
        case 'home' :
            home();
            break;

        case 'login' :
            login($_POST);
            break;

        case 'logout' :
            logout();
            break;

        case 'articles':
            displayArticles();
            break;

        case 'displayArticlesDetail':
            displayArticleDetail($_GET['articleId']);
            break;

        case 'cart':
            displayCart();
            break;

        case 'displayArticlesAdmin':
            displayArticlesAdmin();
            break;

        case 'addArticle':
            addArticle($_POST);
            break;

        case 'editArticle':
            modifyArticle($_GET['articleId']);
            break;

        case 'saveChanges':
            saveChanges($_POST, $_GET['articleId']);
            break;

        case 'removeArticle':
            removeArticle($_GET['articleId']);
            break;

        case 'register':
            register();
            break;

        default :
            lost();
    }
}
else
{
    home();
}