<?php 
class Basket{

    public $idProduct;
    public $basket;
    public $obj;

    function  __construct()
    {
        if(count( $_SESSION['basket']) == 0)
        {
            $this->basket = array();
        }
        else
        {
            $this->basket = $_SESSION['basket'];
        }
        $this->obj = new CDatabaseAction(HOST,USER,PASS,DATA_BASE);
    }

    public function addProduct($id)
    {
        if($this->isInBasket($id)) // jeśli jest już taki produkt i chce mu dodać ilość
        {
            $this->changeCount($id,1);
        }
        else // jeśli jeszcze niema takiego produktu w tablicy
        { 
            $products = $this->obj->getRecordsAsAssociation("products where (id = '$id')","products");
            $rowProduct = $products->getRow(0)->getRowData();
            $this->basket[] = ['idProduct' => $id, 'count' => 1, 'data' => $rowProduct];
        }
        $_SESSION['basket'] = $this->basket; // aktualizowanie tablicy
    }

    public function delProduct($id)
    {
        $tab = array();
        for($i=0; $i< count($this->basket); $i++)
        {
            if($id != $this->basket[$i]['idProduct']) // sprawdza id jeśli jest takie jak ma usunąc to niedodaje to tego do nowej tablicy 
            {
                $tab[] = $this->basket[$i];
            }
        }
        $this->basket = $tab;
        $_SESSION['basket'] = $this->basket;
    }

    public function isInBasket($id)
    {
        $isIn = false;
        foreach ($this->basket as $rowBasket) 
        {
            if($rowBasket['idProduct'] == $id)
            {
                $isIn = true;
            }
        }
        return $isIn;
    }

    public function changeCount($id,$count)
    {
        $i=0;
        foreach ($this->basket as $rowBasket)
        {
            if($rowBasket['idProduct'] == $id) // natrafienie na ten konkretny element
            {
                $newCount = (intval($rowBasket['count'])+intval($count)); // stworzenie zniennej z nową ilością 
                if($newCount > 0)
                {
                    $this->basket[$i]['count'] = $newCount;
                }
            }
        $i++;
        }
    }
    public function sumPriceBasket()
    {
        $sum = 0;
        foreach ($this->basket as $rowBasket)
        {
            $sum += ($rowBasket['data']['price']*$rowBasket['count']);
        }
        return $sum;
    }
    public function sumItemBasket()
    {
        $sum = 0;
        foreach ($this->basket as $rowBasket)
        {
            $sum += $rowBasket['count'];
        }
        return $sum;
    }

}

