<?php

namespace Opera\TextBlockBundle\BlockType;

use Opera\CoreBundle\BlockType\BaseBlock;
use Opera\CoreBundle\BlockType\BlockTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class Text extends BaseBlock implements BlockTypeInterface
{
    public function getType() : string
    {
        return 'text';
    }

    public function createAdminConfigurationForm(FormBuilderInterface $builder)
    {
        $builder->add('text', TextareaType::class, [
            'required' => true,
        ]);
    }
}