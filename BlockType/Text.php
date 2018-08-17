<?php

namespace Opera\TextBlockBundle\BlockType;

use Opera\CoreBundle\BlockType\BaseBlock;
use Opera\CoreBundle\BlockType\BlockTypeInterface;
use Opera\CoreBundle\Form\Type\CkEditorOrTextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Opera\CoreBundle\Entity\Block;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;

class Text extends BaseBlock implements BlockTypeInterface
{
    public function getType() : string
    {
        return 'text';
    }

    public function getTemplate(Block $block) : string
    {
        return sprintf('@OperaTextBlock/blocks/%s.html.twig', $this->getType());
    }

    public function createAdminConfigurationForm(FormBuilderInterface $builder)
    {
        $builder->add('text', CkEditorOrTextareaType::class);    
    }

    public function configure(NodeDefinition $rootNode)
    {
        $rootNode
            ->children()
                ->scalarNode('text')->defaultValue('')->end()
            ->end();
    }
}