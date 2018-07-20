<?php

namespace Opera\TextBlockBundle\BlockType;

use Opera\CoreBundle\BlockType\BaseBlock;
use Opera\CoreBundle\BlockType\BlockTypeInterface;

class Text extends BaseBlock implements BlockTypeInterface
{
    public function getType() : string
    {
        return 'text';
    }
}