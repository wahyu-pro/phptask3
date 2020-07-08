<?php

class Cart
{
    public $items = array();
    public $price;
    function addItem($data)
    {
        $addData = json_decode($data, true);
        array_push($this->items, $addData);
        // var_dump($this->items);
    }

    function removeItem($data)
    {
        $id = json_decode($data, true);
        for ($i = 0; $i < count($this->items); $i++) {
            if ($this->items[$i]["item_id"] == $id["item_id"]) {
                unset($this->items[$i]);
                $this->items = array_values($this->items);
            }
        }
        // var_dump($this->items);
    }

    function addDiscount($diskon)
    {
        $sum = 0;
        for ($i = 0; $i < count($this->items); $i++) {
            $sum += $this->items[$i]["price"] * $this->items[$i]["quantity"] / 2;
        }
        $this->price = $sum;
    }

    function totalItems()
    {
        echo count($this->items);
    }

    function totalQuantity()
    {
        $sum = 0;
        for ($i = 0; $i < count($this->items); $i++) {
            $sum += $this->items[$i]["quantity"];
        }
        echo $sum;
    }

    function totalPrice()
    {
        echo $this->price;
    }

    function showAll()
    {
        var_dump($this->items);
    }

    function checkout()
    {
        $dataJson = json_encode($this->items, JSON_PRETTY_PRINT);
        $open_file = fopen("data-checkout.json", "a+");
        fwrite($open_file, $dataJson);
        $this->items = null;
    }
}

$cart = new Cart();
$cart->addItem('{"item_id":1,"price":30000,"quantity":3}');
$cart->addItem('{"item_id":2,"price":1000, "quantity":3}');
$cart->addItem('{"item_id":3,"price":5000, "quantity":2}');
$cart->removeItem('{"item_id": 2}');
$cart->addItem('{ "item_id": 4, "price": 400, "quantity": 6 }');
$cart->addDiscount('50%');
$cart->totalItems();
echo "\n";
$cart->totalQuantity();
echo "\n";
$cart->totalPrice();
echo "\n";
$cart->showAll();
$cart->checkout();
