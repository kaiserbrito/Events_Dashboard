<?php

namespace App;



class Dashboard
{
    public $items = null;
    public $totalQtd = 0;
    public $totalQt = 0;

    public function __contruct($oldDash) {
        if($oldDash) {
            $this->items = $oldDash->items;
            $this->totalQtd = $oldDash->totalQtd;
        }
    }

    public function add($item, $id) {
        $storedEvent = ['qt' => 0, 'item' => $item];
        if($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedEvent = $this->items[$id];
            }
        }
        $storedEvent['qt']++;
        $this->items[$id] = $storedEvent;
        $this->totalQt++;
    }
}
