<?php
namespace Braddle;

class Stack
{
    private $size = 0;
    private $items = [];

    public function isEmpty() :bool
    {
        return $this->size == 0;
    }

    public function bury(string $string)
    {
        $this->items[$this->size++] = $string;
    }

    public function size() : int
    {
        return $this->size;
    }

    public function unbury()
    {
        return $this->items[--$this->size];
    }
}