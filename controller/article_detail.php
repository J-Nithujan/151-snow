<?php


function displayArticleDetail($articleId)
{
    $articleInfo = findArticleWithId($articleId);
    require "view/article_detail.php";
}

function addArticle($articleData)
{
    if (isset($articleData['code']))
    {
        if (getimagesize($_FILES['photo']['tmp_name']))
        {
            newArticle($articleData);
            displayArticlesAdmin();
        }
        else
        {
            $errormsg = "The file is not a picture";
            // TODO: add the error message when the page is reloaded
            require "view/add_article.php";
        }
    }
    else
    {
        require "view/add_article.php";
    }
}

function removeArticle($articleId)
{
    hideArticle($articleId);

    displayArticlesAdmin();
}

function  modifyArticle($articleId)
{
    $article = findArticleWithId($articleId);
    require "view/modify_article.php";
}

function saveChanges($articleData, $articleId)
{
    if (isset($articleData) && isset($articleId))
    {
        updateArticles($articleData, $articleId);
    }
}
