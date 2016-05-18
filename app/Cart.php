<?php

namespace CodeCommerce;


use CodeCommerce\Http\Requests\Request;
use Illuminate\Support\Facades\Response;

class Cart
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function add($id, $name, $price)
    {

        $this->items += [
            $id => [
                'qtd' => isset($this->items[$id]['qtd'])?$this->items[$id]['qtd']++:1,
                'price' => $price,
                'name' => $name,
            ]
        ];

        return $this->items;
    }

    public function setQuantity($id, $quantity) {
        if (isset($this->items[$id]['qtd']) && $quantity >= 1) {
            $this->items[$id]['qtd'] = $quantity;
        }
        if ($quantity == 0) {
            $this->remove($id);
        }
        return $this->items;
    }

    public function remove($id)
    {
        unset($this->items[$id]);
    }

    public function all()
    {
        return $this->items;
    }

    public function getTotal()
    {
        $total = 0;
        foreach($this->items as $item) {
            $total += $item['price']*$item['qtd'];
        }
        return$total;
    }

}