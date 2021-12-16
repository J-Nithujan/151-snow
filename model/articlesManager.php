<?php


function getArticles()
{
    $articles = null;

    $query = "SELECT snows.id, snows.code, snows.brand, snows.model, snows.snowLength, snows.qtyAvailable, snows.price, snows.photo FROM snows";
    $articles = executeQuerySelect($query);


    return $articles;
}

function findArticleWithId()
{
    $article = null;
    $query = "SELECT snows.code, snows.brand, snows.model, snows.snowLength, snows.description, snows.price, snows.descriptionFull, snows.level, snows.photo FROM snows WHERE snows.id = :selectedArticle";
    $params = array(':selectedArticle' => $_GET['articleId']);
    $article = executeQuerySelect($query, $params);

    return $article;
}

function newArticle()
{
    $query = "INSERT INTO snows (`code`, brand, model, snowLength, audience, qtyAvailable, price, photo) VALUES (:code, :brand, :model, :snowLength, :audience, :qtyAvailable, :price, :photo)";
    $params = array(':code' => $_POST['code'], ':brand' => $_POST['brand'], ':model' => $_POST['model'], ':snowLength' => $_POST['snowLength'], ':audience' => $_POST['audience'], ':qtyAvailable' => $_POST['qtyAvailable'], ':price' => $_POST['price'], ':photo' => $_POST['photo']);
    executeQueryInsert($query, $params);
}