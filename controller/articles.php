<?php

require "model/articlesManager.php";

function displayArticles()
{
    $articles = getArticles();
    require "view/articles.php";
}

function displayArticlesAdmin()
{
    $articles = getArticles();
    require "view/articles_admin.php";
}

function displayCart()
{
    require "view/cart.php";
}