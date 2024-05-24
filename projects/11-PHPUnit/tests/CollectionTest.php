<?php

use App\Core\Collection;

class CollectionTest extends PHPUnit\Framework\TestCase
{
    private $list;

    public function testIsEmpty()
    {
        $this->list = new Collection();
        $this->assertEmpty($this->list->get());
    }

    public function testCountArray()
    {
        $this->list = new Collection([1, 2]);
        $this->assertEquals(2, $this->list->count());
    }
}