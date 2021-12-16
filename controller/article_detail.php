<?php

function displayArticleDetail()
{
    $articleInfo = findArticleWithId();
    require "view/article_detail.php";
}
