<?php

namespace Shellpea\Hello\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function hello($name): string
    {
        return 'Hello ' . $name;
    }
}
