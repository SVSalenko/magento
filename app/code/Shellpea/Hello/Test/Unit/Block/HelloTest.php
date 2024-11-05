<?php

namespace Shellpea\Hello\Test\Unit\Block;

use Shellpea\Hello\Block\Hello;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    /**
     * @var Hello
     */
    protected $block;

    protected function setUp(): void
    {
        $helper = new ObjectManager($this);
        $this->block = $helper->getObject(Hello::class);
    }

    public function testHello(): void
    {
        $this->assertEquals("Hello World", $this->block->hello('World'));
    }
}
