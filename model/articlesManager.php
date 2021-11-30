<?php


function getArticles()
{
    $articles = null;

    $query = "SELECT snows.brand, snows.model, snows.qtyAvailable, snows.price, snows.photo FROM snows";
    $articles = executeQuerySelect($query);


    return $articles;
}