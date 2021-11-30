<?php

require "model/articlesManager.php";

function displayArticles()
{
    $articles = getArticles();
    require "view/articles.php";
}