<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function totalQty()
    {
        $totalQty = 0;
        if(count($this->items)!=0)
        {

            foreach($this->items as $item)
            {
                $totalQty += $item['qty'];
            }
        }

        return $totalQty;
    }

    public function totalPrice()
    {
        $totalPrice = 0;
        if(count($this->items)!=0)
        {
            foreach($this->items as $item)
            {
                $totalPrice += $item['price']*$item['qty'];
            }
        }

        return $totalPrice;
    }

    public function add($item, $quantity)
    {
        $storedItem = ['qty'=>$quantity, 'price'=>$item->price*$quantity, 'item'=>$item];
        if ($this->items)
        {
            if (array_key_exists($item->id, $this->items))
            {
                $storedItem = $this->items[$item->id];
                $storedItem['qty'] += $quantity;
            }
        }
        $this->items[$item->id] = $storedItem;
        $this->totalQty = $this->totalQty();
        $this->totalPrice = $this->totalPrice();
    }

    public function deleteCart($id)
    {
        unset($this->items[$id]);
        $this->totalQty = $this->totalQty();
        $this->totalPrice = $this->totalPrice();
    }
}
