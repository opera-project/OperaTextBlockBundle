<?php

namespace Opera\TextBlockBundle\BlockType;

use Opera\CoreBundle\BlockType\BaseBlock;
use Opera\CoreBundle\BlockType\BlockTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class Text extends BaseBlock implements BlockTypeInterface
{
    public function getType() : string
    {
        return 'text';
    }

    public function getTemplate() : string
    {
        return sprintf('@OperaTextBlock/blocks/%s.html.twig', $this->getType());
    }

    public function createAdminConfigurationForm(FormBuilderInterface $builder)
    {
        $builder->add('text', TextareaType::class, [
            'required' => true,
        ]);
    }
}