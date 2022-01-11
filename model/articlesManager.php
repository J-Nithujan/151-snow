<?php


function getArticles()
{
    $articles = null;

    $query = "SELECT snows.id, snows.code, snows.brand, snows.model, snows.snowLength, snows.qtyAvailable, snows.price, snows.photo, snows.active FROM snows";
    $articles = executeQuerySelect($query);


    return $articles;
}

function findArticleWithId($articleId)
{
    $article = null;
    $query = "SELECT snows.code, snows.brand, snows.model, snows.snowLength, snows.audience, snows.qtyAvailable, snows.description, snows.price, snows.descriptionFull, snows.level, snows.photo FROM snows WHERE snows.id = :selectedArticle";
    $params = array(':selectedArticle' => $articleId);
    $article = executeQuerySelect($query, $params);

    return $article;
}

function newArticle($articleData)
{
    $filePath = saveImage($articleData['audience']);
    $query = "INSERT INTO snows (`code`, brand, model, snowLength, audience, qtyAvailable, price, photo, active) VALUES (:code, :brand, :model, :snowLength, :audience, :qtyAvailable, :price, :photo, 1)";

    $params = array(':code' => $articleData['code'], ':brand' => $articleData['brand'], ':model' => $articleData['model'], ':snowLength' => $articleData['snowLength'], ':audience' => $articleData['audience'], ':qtyAvailable' => $articleData['qtyAvailable'], ':price' => $articleData['price'], ':photo' => $filePath);
    executeQueryInsert($query, $params);
}

function hideArticle($articleId)
{
    $query = "UPDATE snows SET active = 0 WHERE id = :articleId";
    $params = array(':articleId' => $articleId);
    executeQueryInsert($query, $params);
}

function updateArticles($updated, $articleId)
{
    $filePath = saveImage($updated['audience']);
    $query = "UPDATE snows SET `code`=:code, brand=:brand, model=:model, snowLength=:snowLength, audience=:audience, qtyAvailable=:qtyAvailable, price=:price, photo=:photo WHERE snows.id = :id";
    $params = array(':code'=> $updated['code'], ':brand'=> $updated['brand'], ':model'=> $updated['model'], ':snowLength'=> $updated['snowLength'], ':audience'=> $updated['audience'], ':qtyAvailable'=> $updated['qtyAvailable'], ':price'=> $updated['price'], ':photo'=> $filePath, ':id' => $articleId);
    executeQueryInsert($query, $params);
}

function saveImage($audience)
{
    $target_dir = "view/content/images/";

    if ($audience == "Femme")
    {
        $target_dir .= "women_snows/";
    }
    else
    {
        $target_dir .= "men_snows/";
    }

    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);

    return $target_file;
}