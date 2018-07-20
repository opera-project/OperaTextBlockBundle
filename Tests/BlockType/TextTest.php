<?php

namespace Opera\TextBlockBundle\Tests\BlockType;

use Opera\CoreBundle\Tests\TestCase;
use Opera\TextBlockBundle\BlockType\Text;

class TextTest extends TestCase
{
    public function testGetType()
    {
        $blockType = new Text();

        $this->assertEquals('text', $blockType->getType());
    }
}