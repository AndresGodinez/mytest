<?php


class Slug
{
    protected $str = '';

    public function __construct($str)
    {
        $this->setStr($str);
    }

    protected function setStr(string $str) :void
    {
        $this->str = strtolower(trim($str));
    }

    public function getStr() : string
    {
        return $this->str;
    }

    public function render()
    {
       return str_replace(' ', '-', $this->str);
    }

}