<?php


use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase
{
    public function test_render()
    {
        require "Slug.php";
        $text = "prueba de slug";

        $slug = new Slug($text);

        $expected = "prueba-de-slug";

        $this->assertEquals($expected, $slug->render());
    }
}