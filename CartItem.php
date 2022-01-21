<?php


class CartItem
{
//region private attributes
    private string $articleId;
    private string $description;
    private string $imgPath;
    private float $price;
    private int $quantity;
    private float $totalPrice;
//endregion private attributes

//region constructor
    public function __construct($articleId, $quantity)
    {
        $this->articleId = $articleId;
        $this->quantity = $quantity;
    }
//endregion constructor

//region private methods
    private function updateTotal(){
        $this->totalPrice = $this->price * $this->quantity;
    }
//endregion private methods

//region accessors and mutators
    //TODO : complete the accessor and mutator
    public function GetArticleId()
    {

    }

    public function GetDescription()
    {

    }

    public function GetImgPath()
    {

    }

    public function GetQuantity()
    {

    }

    public function SetQuantity($quantity)
    {

    }

    public function GetPrice()
    {

    }

    public function GetTotalPrice()
    {

    }
//endregion accessors and mutators

//region public methods
    public function SetAttributes($description, $imgPath, $price){
        $this->description = $description;
        $this->imgPath = $imgPath;
        $this->price = $price;
        $this->updateTotal();
    }
//endregion public methods
}

